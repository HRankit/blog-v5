<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\View\View;
use App\Actions\Posts\ParsePost;
use App\Actions\Posts\FetchPosts;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $heroSections = collect([
            [
                'title' => 'Where <span class="text-blue-600 italic">Expert</span> Care,<br> Meets Your <span class="text-blue-600 italic">Perfect Smile</span>',
                'subtitle' => 'Discover the best in dental care with modern treatments and trusted professionals'
            ],
            [
                'title' => 'Transform Your <span class="text-blue-600 italic">Smile</span> with <span class="text-blue-600 italic">Trusted Dental Care</span>',
                'subtitle' => 'At Dr. Dupare Dental Clinic, we offer a range of services from routine check-ups to advanced treatments, all designed to give you a smile you’ll love. Book your consultation today!'
            ],
            [
                'title' => 'Your <span class="text-blue-600 italic">Smile</span>, Our <span class="text-blue-600 italic">Priority</span>',
                'subtitle' => 'Join the Dr. Dupare Dental Clinic family for personalized, compassionate dental care. We’re here to make your visit comfortable and your smile brighter!'
            ],
            [
                'title' => '<span class="text-blue-600 italic">Advanced Dentistry</span> <br>for a Healthier Smile',
                'subtitle' => 'With state-of-the-art technology and expert care, we provide treatments that help you achieve your best smile. Experience the future of dentistry today.'
            ],
            [
                'title' => 'Smile Confidently with Gentle Care',
                'subtitle' => 'At Dr. Dupare Dental Clinic, we focus on creating a stress-free experience, providing top-notch dental care that puts your comfort first. Book your appointment today!'
            ],
            [
                'title' => 'Comprehensive Dental Care for the <span class="text-blue-600 italic">Whole Family</span>',
                'subtitle' => 'From children to adults, we provide gentle, effective care for everyone in the family. Trust Dr. Dupare Dental Clinic to care for your smile and your loved ones’.'
            ],
        ]);

        $heroSection = Cache::flexible('hero-section', [60, 600], function () use ($heroSections) {
            return $heroSections->random();
        });



        // Get the timestamp for the most recent modified file.
        $timestamp = max(
            array_map(
                filemtime(...),
                glob(resource_path('markdown/posts') . '/*.md')
            )
        );

        $key = "latest_posts_$timestamp";

        $latest = cache()->rememberForever($key, function () {
            return app(FetchPosts::class)
                ->fetch()
                ->map(app(ParsePost::class)->parse(...))
                ->sortByDesc('published_at')
                ->take(12)
                ->map(function (array $post) {
                    $post['comments_count'] = Comment::query()
                        ->where('post_slug', $post['slug'])
                        ->count();

                    return $post;
                });
        });

        return view('home', compact('heroSection', 'latest'));
    }
}
