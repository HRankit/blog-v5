<nav {{ $attributes->class('flex items-center gap-6 md:gap-8 font-normal text-xs') }}>
    <a
        wire:navigate
        href="{{ route('home') }}"
    >
        <x-logo />
    </a>

    <div class="flex-grow"></div>

    <a
        wire:navigate
        href="{{ route('home') }}"
        @class([ 'transition-colors hover:text-blue-600' , 'text-blue-600'=> request()->routeIs('home'),
        ])"
        >
        @if (request()->routeIs('home'))
        <x-heroicon-s-home class="mx-auto size-6 md:size-7" />
        @else
        <x-heroicon-o-home class="mx-auto size-6 md:size-7" />
        @endif

        Home
    </a>
    <a
        wire:navigate
        href="{{ route('posts.index') }}"
        @class([ 'transition-colors hover:text-blue-600' , 'text-blue-600'=> request()->routeIs('posts.index'),
        ])"
        >
        @if (request()->routeIs('posts.index'))
        <x-heroicon-s-fire class="mx-auto size-6 md:size-7" />
        @else
        <x-heroicon-o-fire class="mx-auto size-6 md:size-7" />
        @endif

        Blog
    </a>
    <!-- 
    <a
        wire:navigate
        href="{{ route('posts.index') }}"
        @class([ 'transition-colors hover:text-blue-600' , 'text-blue-600'=> request()->routeIs('posts.index'),
        ])"
        >
        @if (request()->routeIs('posts.index'))
        <x-heroicon-s-fire class="mx-auto size-6 md:size-7" />
        @else
        <x-heroicon-o-fire class="mx-auto size-6 md:size-7" />
        @endif

        Latest
    </a>

    <a
        wire:navigate
        href="{{ route('links.index') }}"
        @class([ 'transition-colors hover:text-blue-600' , 'text-blue-600'=> request()->routeIs('links.index'),
        ])"
        >
        @if (request()->routeIs('links.index'))
        <x-heroicon-s-link class="mx-auto size-6 md:size-7" />
        @else
        <x-heroicon-o-link class="mx-auto size-6 md:size-7" />
        @endif

        Links
    </a>
  -->

   
    <!-- @auth
        <x-dropdown>
            <x-slot:btn>
                <x-heroicon-o-user class="mx-auto size-6 md:size-7" />
                Account
            </x-slot>

            <x-slot:items>
                <div class="flex items-center gap-3 px-4 py-2">
                    <img
                        src="{{ auth()->user()->avatar }}"
                        alt="{{ auth()->user()->name }}'s GitHub avatar"
                        class="rounded-full size-6 md:size-8"
                    />

                    {{ auth()->user()->name }}
                </div>

                <x-dropdown.divider />

                <x-dropdown.item href="https://github.com/settings" target="_blank">
                    <x-heroicon-o-arrow-top-right-on-square class="size-4" />
                    Manage on GitHub
                </x-dropdown.item>

                <x-dropdown.item destructive form="logout-form">
                    <x-heroicon-o-arrow-right-end-on-rectangle class="size-4" />
                    Log out
                </x-dropdown.item>

                <form method="POST" action="{{ route('auth.logout') }}" id="logout-form" class="hidden">
                    @csrf
                </form>
            </x-slot>
        </x-dropdown>
    @else
        <a
            href="{{ route('auth.redirect') }}"
            class="transition-colors hover:text-blue-600"
        >
            <x-iconoir-github class="mx-auto size-6 md:size-7" />
            Sign in
        </a>
    @endauth -->

    <x-dropdown>
        <x-slot:btn>
            <x-heroicon-o-ellipsis-horizontal
                class="mx-auto transition-transform size-6 md:size-7"
                x-bind:class="{ 'rotate-90': open }" />
            More
            </x-slot>

            <x-slot:items>
                <!-- <x-dropdown.item href="https://github.com/benjamincrozat/blog-v5" target="_blank">
                    <x-iconoir-git-fork class="size-4" />
                    Fork the source code
                </x-dropdown.item> -->

                <x-dropdown.item href="{{ route('home') }}#about">
                    <x-heroicon-o-question-mark-circle class="size-4" />
                    About us
                </x-dropdown.item>

                <x-dropdown.item href="mailto:reachus@duparedentalclinic.com">
                    <x-heroicon-o-envelope class="size-4" />
                    Email us
                </x-dropdown.item>

                <x-dropdown.divider>
                    Follow us
                </x-dropdown.divider>

                <x-dropdown.item href="https://www.facebook.com/dr.duparedentalclinic/" target="_blank">
                    <x-iconoir-facebook class="size-4" />
                    Facebook
                </x-dropdown.item>

                <x-dropdown.item href="https://www.instagram.com/duparedentalclinic/" target="_blank">
                    <x-iconoir-instagram class="size-4" />
                    Instagram
                </x-dropdown.item>

                <!-- <x-dropdown.item href="https://x.com/benjamincrozat" target="_blank">
                    <x-iconoir-x class="size-4" />
                    X
                </x-dropdown.item> -->
                </x-slot>
    </x-dropdown>
    <x-btn
        primary
        class="flex items-center"
        href="tel:+919021366831">
        <x-heroicon-o-phone style="margin-right: 0.75rem;" class="mx-auto size-6 md:size-6 mr-3" />
        Book Appointment
    </x-btn>
</nav>