<x-app>
    <div class="container mt-8 text-center">


        <div class="font-bold tracking-tight text-black text-4xl/none md:text-5xl lg:text-7xl text-balance">
            {!! $heroSection['title'] !!}
        </div>

        <div class="mt-5 leading-tight text-black/75 text-lg/tight sm:text-xl/tight md:text-2xl/tight md:mt-8 lg:text-3xl text-balance">
            {!! $heroSection['subtitle'] !!}
        </div>

        <div class="flex sm:flex-row flex-col justify-center items-center text-center mt-7 md:mt-11 gap-4 ">
            <x-btn href="#about">
                About Us
            </x-btn>
            <x-btn
                primary
                class="py-2 px-4 rounded inline-flex items-center  sm:w-auto md:w-auto"
                href="https://wa.me/919021366831">
                <x-iconoir-chat-bubble style="margin-right: 0.75rem;" class="mx-auto size-6 md:size-6 " />
                <span>Chat with us</span>
            </x-btn>
            <x-btn
                primary
                class="py-2 px-4 rounded inline-flex items-center  sm:w-auto md:w-auto"
                href="tel:+919021366831">
                <x-heroicon-o-phone style="margin-right: 0.75rem;" class="mx-auto size-6 md:size-6 mr-3" />
                Book Appointment
            </x-btn>
        </div>

        <!-- <div class="flex items-center justify-center gap-2 text-center mt-7 md:mt-11">
            <x-btn href="#about">
                About Us
            </x-btn>

            <x-btn
                primary
                class="flex items-center"
                href="https://wa.me/919021366831">
                <x-iconoir-chat-bubble style="margin-right: 0.75rem;" class="mx-auto size-6 md:size-6 mr-3" />
                Chat with us
            </x-btn>
          

            <x-btn
                primary
                class="flex items-center"
                href="tel:+919021366831">
                <x-heroicon-o-phone style="margin-right: 0.75rem;" class="mx-auto size-6 md:size-6 mr-3" />
                Book Appointment
            </x-btn>
        </div> -->

        <!-- <div class="font-bold tracking-tight text-black text-4xl/none md:text-5xl lg:text-7xl text-balance">
            <span class="text-blue-600">{{ Number::format($visitors) }}</span> monthly visitors read my blog
        </div>

        <div class="mt-5 leading-tight text-black/75 text-lg/tight sm:text-xl/tight md:text-2xl/tight md:mt-8 lg:text-3xl text-balance">
            No matter how senior you are, I have something for you. Ready?
        </div>

        <div class="flex items-center justify-center gap-2 text-center mt-7 md:mt-11">
            <x-btn href="#about">
                Who the F are you?
            </x-btn>

            <x-btn
                primary
                href="#latest"
            >
                Start reading
            </x-btn>
        </div> -->
    </div>

    <x-section title="On Panel" class="mt-24 md:mt-32 lg:max-w-screen-md">
        <div class="flex flex-wrap justify-center mt-8 gap-y-4 gap-x-12">
            <a href="https://cghs.gov.in" target="_blank" class="flex flex-col items-center">
                <img
                    src="{{ asset('cghs_logo.png') }}"
                    alt="CGHS Logo"
                    class="!rounded-full size-28 md:size-32 mb-2" />
                <span class="text-center text-lg font-semibold text-gray-800 uppercase tracking-wide">
                    Central Government Health Scheme
                </span>
            </a>

            <!-- <a href="https://nobinge.ai" target="_blank">
                <x-icon-nobinge class="h-6 md:h-7" />
                <span class="sr-only">Nobinge</span>
            </a> -->
        </div>

        <div class="text-center sm:text-xl mt-7">
            At Dupare Dental Clinic, we prioritize your dental health and overall well-being.
            We offer a comprehensive range of dental services, utilizing state-of-the-art technology and techniques.
            Our experienced and caring dental professionals are dedicated to making your visit a pleasant and comfortable experience.
        </div>
    </x-section>




    <x-section title="Find us" class="mt-24 md:mt-32">
        <div class="flex justify-center items-center mt-10">
            <div class="w-full   rounded-lg shadow-lg overflow-hidden">

                <!-- style="border:0; filter: grayscale(60%);" -->

                <iframe title="Google Maps Location"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.59732614342272!2d79.0829746915844!3d21.130211945544662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a881ae7596b6eae!2sDr.%20Dupare%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1623225212185!5m2!1sen!2sin"
                    width="100%"
                    height="450"
                    style="border:0; filter: grayscale(30%);"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </x-section>

    <x-section title="Services" class="mt-24 md:mt-32">
        <div class="flex justify-center items-center mt-10">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4 flex justify-center">
                        <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l4-4m0 0l4 4m-4-4v12"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold">Dental Checkup</h3>
                    <p class="text-gray-500 mt-2">Regular checkups to maintain oral health and prevent issues.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4 flex justify-center">
                        <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 5c0-1.104-.896-2-2-2H6c-1.104 0-2 .896-2 2v14c0 1.104.896 2 2 2h8c1.104 0 2-.896 2-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold">Teeth Whitening</h3>
                    <p class="text-gray-500 mt-2">A brighter smile with our safe and effective teeth whitening services.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4 flex justify-center">
                        <x-icon-ortho class="h-6 md:h-7" />
                    </div>
                    <h3 class="text-xl font-semibold">Orthodontics</h3>
                    <p class="text-gray-500 mt-2">Achieve a perfect smile with braces and other orthodontic treatments.</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4 flex justify-center">
                        <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold">Fillings</h3>
                    <p class="text-gray-500 mt-2">Restore your teeth with durable, natural-looking fillings.</p>
                </div>

                <!-- Service 5 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4 flex justify-center">
                        <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4H4v-4h1zM3 10V6h4l4-4h6V0h4v12h-6l-4 4H3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold">Root Canals</h3>
                    <p class="text-gray-500 mt-2">Prevent tooth loss with a root canal treatment to save your natural teeth.</p>
                </div>

                <!-- Service 6 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4 flex justify-center">
                        <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 7V3H7v4H4l7 7 7-7h-3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold">Dental Implants</h3>
                    <p class="text-gray-500 mt-2">Replace missing teeth with durable and natural-looking dental implants.</p>
                </div>
            </div>
        </div>

    </x-section>

    <x-section title="Latest posts" id="latest" class="mt-24 md:mt-32">
        @if ($latest->isNotEmpty())
        <ul class="grid gap-10 mt-8 gap-y-16 xl:gap-x-16 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($latest as $post)
            <li>
                <x-post :$post />
            </li>
            @endforeach
        </ul>
        @endif

        <div class="mt-16 text-center">
            <x-btn
                primary
                wire:navigate
                href="{{ route('posts.index') }}">
                Browse all articles
            </x-btn>
        </div>
    </x-section>

    <x-section title="About Dr. Dupare Dental Clinic" id="about" class="mt-24 lg:max-w-screen-md md:mt-32">
        <x-prose class="mt-8">
            <img
                src="{{ asset('logo.png') }}"
                alt="Dr. Dupare Dental Clinic Logo"
                class="float-right mt-4 ml-4 !rounded-full size-28 md:size-32" />

            {!! Str::markdown(<<<MARKDOWN

                

                Welcome to **Dr. Dupare Dental Clinic**, your trusted partner in dental health. Located in the heart of **Nagpur, Maharashtra**, we are dedicated to providing comprehensive, high-quality dental care for patients of all ages. Our clinic combines state-of-the-art technology, skilled professionals, and a patient-centered approach to ensure your experience is as comfortable and stress-free as possible.

                # Our Founder

                **Dr. Arun Dupare**, the founder of **Dr. Dupare Dental Clinic**, established the clinic in **2001** with a vision to provide exceptional dental care in a comfortable and compassionate environment. With over **40** years of experience in the dental field, Dr. Dupare is committed to improving the oral health of the community. Having earned numerous qualifications and certifications in dentistry, Dr. Dupare believes in continuous learning and staying up-to-date with the latest advancements in dental care. Their dedication to patient care has been the driving force behind the clinic's success and its reputation for excellence.

                # Our Team

                At **Dr. Dupare Dental Clinic**, we are proud to have a team of highly skilled and compassionate dental professionals who share our commitment to providing outstanding patient care. Each member of our team is dedicated to ensuring that you feel comfortable, informed, and confident in your treatment plan. Our team includes:

                - **Dr. Arun Dupare**, Prosthodontist, 40+ years
                - **Dr. Lata Dupare**, Periodontist, 40+ years
                - **Dr. Ankit Dupare**, Oral & Maxillofacial Surgeon, 10+ years
                - **Dr. Juili Dupare**, Endodontist, 8+ years
                

                Our team is passionate about delivering personalized dental care, whether it's a routine check-up, advanced cosmetic procedure, or a complex restorative treatment. We work together to make sure you receive the best possible care, tailored to your specific needs.

                # Our Clinic

                Founded in **2001**, **Dr. Dupare Dental Clinic** has earned a reputation for excellence in dental care. As an empanelled provider under the **Central Government Health Scheme (CGHS)**, we uphold the highest standards of dental treatment and patient safety. Our mission is to enhance your smile and improve your overall oral health by offering a wide range of services, from preventive care to advanced cosmetic and restorative procedures.

                Whether you need a routine check-up, smile makeover, or specialized treatment, our experienced team is here to guide you every step of the way. At **Dr. Dupare Dental Clinic**, we prioritize your comfort, satisfaction, and long-term dental health.

                We look forward to welcoming you to our clinic and providing you with exceptional dental care.
                  
                MARKDOWN) !!}
                </x-prose>
    </x-section>
</x-app>

<!-- Hi! I'm from the South of France and I've been a self-taught web developer since 2006. When I started learning PHP and JavaScript, PHP 4 was still widely used, Internet Explorer 6 ruled the world, and we used DHTML to add falling snow on websites.

                Being able to educate myself for free on the web changed my life for the better. Giving back to the community was a natural direction in my career and I truly enjoy it.

                Therefore, I decided to take action:

                1. I launched this blog in September 2022 with the goal to be in everyone's Google search. I get more than tens of thousands of monthly clicks from it and even more visits overall (my [analytics dashboard](https://benjamincrozat.pirsch.io/?domain=benjamincrozat.com&interval=30d&scale=day) is public by the way).
                2. I also started growing my [X (formerly Twitter) account](https://x.com/benjamincrozat) at the same time, which has now over 7,000 followers.
                3. All the content I write is free thanks my sponsors.

                I also want to be completely free with my time and make a living with my own products. In April 2024, I launched [Nobinge](https://nobinge.ai/), a tool to summarize and chat with your content, including YouTube videos.

                Believe me, I'm just getting started! -->