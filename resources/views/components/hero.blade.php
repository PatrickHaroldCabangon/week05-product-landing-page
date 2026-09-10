<section id="home" class="relative max-w-4xl mx-auto px-6 pt-24 pb-32 text-center overflow-hidden">

    {{-- decorative doodles --}}
    <svg class="absolute left-4 top-16 w-16 h-16 text-stone-200 hidden sm:block" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
        <path d="M50 15 C60 25, 60 35, 50 45 C40 35, 40 25, 50 15 Z" />
        <path d="M50 45 C60 55, 60 65, 50 75 C40 65, 40 55, 50 45 Z" />
        <path d="M15 50 C25 40, 35 40, 45 50 C35 60, 25 60, 15 50 Z" />
    </svg>
    <svg class="absolute right-6 top-24 w-20 h-20 text-stone-200 hidden sm:block" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
        <circle cx="50" cy="50" r="30" />
        <path d="M50 20 L50 80 M20 50 L80 50 M29 29 L71 71 M71 29 L29 71" />
    </svg>

    <p class="text-sm tracking-widest text-[#7A2E2E] mb-6 animate-[fadeUp_0.8s_ease-out]">EST. 2011 · LOS BAÑOS</p>

    <h1 class="font-serif italic text-5xl sm:text-6xl text-stone-900 leading-tight mb-8 animate-[fadeUp_0.8s_ease-out_0.1s_both]">
        Big flavors make<br>great moods
    </h1>

    <p class="text-stone-600 max-w-md mx-auto mb-10 animate-[fadeUp_0.8s_ease-out_0.2s_both]">
        Hearty Filipino comfort food made fresh daily — from siomai rice to loaded burgers, made for the whole barkada.
    </p>

    <div class="flex justify-center animate-[fadeUp_0.8s_ease-out_0.3s_both]">
        <x-button href="#pricing">View Our Menu</x-button>
    </div>

    <div class="mt-16 flex flex-col items-center gap-2 text-stone-400 animate-[fadeUp_0.8s_ease-out_0.4s_both]">
        <div class="w-6 h-10 rounded-full border border-stone-300 flex justify-center pt-2">
            <div class="w-1 h-2 rounded-full bg-stone-400 animate-bounce"></div>
        </div>
    </div>

    <div class="mt-16 aspect-[16/7] overflow-hidden rounded-2xl animate-[fadeUp_0.8s_ease-out_0.3s_both]">
        <img src="{{ asset('images/image1.jpg') }}" alt="Big Belly's meal" class="w-full h-full object-cover">
    </div>
</section>