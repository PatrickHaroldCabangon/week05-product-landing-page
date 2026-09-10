@extends('layouts.app')

@section('content')
    <x-navbar />
    <x-hero />

    <section id="features" data-reveal class="max-w-5xl mx-auto px-6 py-16">
        <h2 class="font-serif text-3xl text-stone-900 mb-4">Why dine at Big Belly's</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-10">
            <x-feature-card title="Pick your meat, pick your sauce" description="Crispy Chicken, Crunchy Liempo, or Fish Fingers — paired with sauces like Kung Pao, Korean Yangnyeom, or Garlic Parmesan." />
            <x-feature-card title="All-day breakfast" description="Belly's Tapa and Longganisa served with garlic rice and egg, any time of day." />
            <x-feature-card title="Sizzling plates" description="Salisbury Steak, Tender Porkchop, and Belly's Ribeye served hot off the sizzling plate." />
            <x-feature-card title="Loaded chicken wings" description="Garlic Parmesan and Salted Egg wings, available as platters or full rice meals." />
            <x-feature-card title="Dimsum & noodles" description="Siomai Rice, Sharksfin Rice, and Sweet & Spicy Noodles for quick, filling meals." />
            <x-feature-card title="Easy to find" description="Conveniently located in Los Baños with dine-in seating for the whole family." />
        </div>
    </section>

    <section id="menu" data-reveal class="max-w-5xl mx-auto px-6 py-16 border-t border-stone-200">
    <p class="text-sm tracking-widest text-[#7A2E2E] mb-3">ALL TIME FAVORITES</p>
    <h2 class="font-serif text-3xl text-stone-900 mb-10">Crowd favorites</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
        <x-menu-card image="{{ asset('images/image3.jpg') }}" name="Belly's Fried Chicken" price="₱144" tag="Best Seller" />
        <x-menu-card image="{{ asset('images/image4.jpg') }}" name="Shawarma Rice Special" price="₱189" />
        <x-menu-card image="{{ asset('images/image5.jpg') }}" name="Crispy Sisig Bowl" price="₱189" />
        <x-menu-card image="{{ asset('images/image6.jpg') }}" name="Belly's Pares" price="₱189" />
    </div>
</section>

    <section id="pricing" data-reveal class="max-w-5xl mx-auto px-6 py-16 border-t border-stone-200">
        <p class="text-sm tracking-widest text-[#7A2E2E] mb-3">EXPLORE THE MENU</p>
        <h2 class="font-serif text-3xl text-stone-900 mb-10">Menu categories</h2>
        <div class="grid md:grid-cols-3 gap-px bg-stone-200">
            <x-pricing-card plan="All Time Favorites" price="From ₱144" :features="['Belly\'s Fried Chicken — ₱144', 'Shawarma Rice Special — ₱189', 'Crispy Sisig Bowl — ₱189', 'Belly\'s Pares — ₱189']" />
            <x-pricing-card plan="Sizzling Plates" price="From ₱169" :features="['Salisbury Steak — ₱169', 'Tender Porkchop — ₱189', 'Chicken Tenders — ₱169', 'Belly\'s Ribeye — ₱209']" :featured="true" />
            <x-pricing-card plan="Belly's Chicken Wings" price="From ₱189" :features="['Garlic Parmesan Platter — ₱219', 'Salted Egg Platter — ₱209', 'Garlic Parmesan Rice Meal — ₱199', 'Salted Egg Rice Meal — ₱189']" />
        </div>
    </section>

    <section id="testimonials" data-reveal class="max-w-5xl mx-auto px-6 py-16 border-t border-stone-200">
        <h2 class="font-serif text-3xl text-stone-900 mb-4">What our customers say</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-10">
            <x-testimonial-card photo="https://i.pravatar.cc/100?img=1" name="Maria Santos" position="Regular customer" review="Sulit talaga ang serving size, and the Belly's Pares reminds me of my lola's cooking." />
            <x-testimonial-card photo="https://i.pravatar.cc/100?img=2" name="Jun Reyes" position="Elbi resident" review="Malapit sa amin, laging busog kami pag-alis. Solid ang sizzling plates nila." />
            <x-testimonial-card photo="https://i.pravatar.cc/100?img=3" name="Angela Cruz" position="Local foodie" review="Consistent quality since noong nag-start sila 2011. Paborito ko ang Crispy Sisig Bowl." />
        </div>
    </section>

    <section id="contact" data-reveal class="max-w-5xl mx-auto px-6 py-20 border-t border-stone-200 text-center">
        <h2 class="font-serif text-3xl text-stone-900 mb-4">Hungry already?</h2>
        <p class="text-stone-600 mb-8">Visit us today and enjoy generous meals the whole barkada will love.</p>
        <div class="flex justify-center">
            <x-button href="#">Contact us</x-button>
        </div>
    </section>

    <x-footer />
@endsection