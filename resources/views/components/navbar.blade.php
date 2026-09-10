<nav data-navbar class="sticky top-0 z-50 bg-[#FAF6EF] transition-shadow duration-300 pt-6">
    <div class="max-w-5xl mx-auto px-6 bg-white rounded-full shadow-sm border border-stone-100 h-20 flex items-center justify-between md:justify-center relative">

        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-700 mr-32">
            <a href="#home" class="text-[#7A2E2E]">Home</a>
            <span class="text-stone-300">•</span>
            <a href="#features" class="hover:text-[#7A2E2E] transition-colors">Menu</a>
            <span class="text-stone-300">•</span>
            <a href="#pricing" class="hover:text-[#7A2E2E] transition-colors">Order</a>
        </div>

        <div class="absolute left-1/2 -translate-x-1/2 -top-3 w-24 h-24 rounded-full bg-white border border-stone-200 shadow-sm overflow-hidden">
            <img src="{{ asset('images/image2.jpg') }}" alt="Big Belly's logo" class="w-full h-full object-cover">
        </div>

        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-700 ml-32">
            <a href="#testimonials" class="hover:text-[#7A2E2E] transition-colors">Reviews</a>
            <span class="text-stone-300">•</span>
            <a href="#contact" class="hover:text-[#7A2E2E] transition-colors">Reserve</a>
            <span class="text-stone-300">•</span>
            <x-button href="#pricing" class="!px-4 !py-2 text-xs">Order Now</x-button>
        </div>

        {{-- Mobile hamburger button --}}
        <button data-menu-toggle aria-label="Toggle menu" class="md:hidden ml-auto w-10 h-10 flex items-center justify-center text-stone-700">
            <svg data-menu-icon-open xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg data-menu-icon-close xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24" class="hidden">
                <path d="M6 6l12 12M18 6L6 18"/>
            </svg>
        </button>
    </div>

    {{-- Mobile dropdown menu --}}
    <div data-mobile-menu class="hidden md:hidden max-w-5xl mx-auto mt-2 px-6">
        <div class="bg-white rounded-2xl shadow-sm border border-stone-100 p-4 flex flex-col gap-1 text-sm font-medium text-stone-700">
            <a href="#home" class="px-3 py-2.5 rounded-lg hover:bg-stone-50">Home</a>
            <a href="#features" class="px-3 py-2.5 rounded-lg hover:bg-stone-50">Features</a>
            <a href="#menu" class="px-3 py-2.5 rounded-lg hover:bg-stone-50">Menu</a>
            <a href="#pricing" class="px-3 py-2.5 rounded-lg hover:bg-stone-50">Order</a>
            <a href="#testimonials" class="px-3 py-2.5 rounded-lg hover:bg-stone-50">Reviews</a>
            <a href="#contact" class="px-3 py-2.5 rounded-lg hover:bg-stone-50">Reserve</a>
            <div class="pt-2 mt-2 border-t border-stone-100">
                <x-button href="#pricing" class="w-full text-center">Order Now</x-button>
            </div>
        </div>
    </div>
</nav>