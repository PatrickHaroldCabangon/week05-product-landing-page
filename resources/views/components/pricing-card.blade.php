@props(['plan', 'price', 'features' => [], 'featured' => false])

<div class="p-8 {{ $featured ? 'bg-[#7A2E2E] text-[#FAF6EF]' : 'border border-stone-200' }}">
    <h3 class="font-serif text-xl mb-1 {{ $featured ? 'text-white' : 'text-stone-900' }}">{{ $plan }}</h3>
    <p class="text-2xl mb-8 {{ $featured ? 'text-white' : 'text-stone-900' }}">{{ $price }}</p>
    <ul class="space-y-3 mb-10 text-sm {{ $featured ? 'text-stone-100' : 'text-stone-600' }}">
        @foreach ($features as $feature)
            <li class="pb-3 border-b {{ $featured ? 'border-white/20' : 'border-stone-200' }}">{{ $feature }}</li>
        @endforeach
    </ul>
    <x-button href="#contact" variant="{{ $featured ? 'secondary' : 'primary' }}" class="{{ $featured ? '!border-white !text-white hover:!bg-white/10' : '' }} w-full text-center block">
        Subscribe
    </x-button>
</div>