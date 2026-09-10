@props(['image', 'name', 'price', 'tag' => null])

<div class="group overflow-hidden border border-stone-200 hover:border-stone-300 transition-colors">
    <div class="aspect-square overflow-hidden relative">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        @if ($tag)
            <span class="absolute top-3 left-3 bg-[#FAF6EF] text-[#7A2E2E] text-xs font-medium px-3 py-1 rounded-full">{{ $tag }}</span>
        @endif
    </div>
    <div class="p-4 flex items-center justify-between">
        <p class="text-stone-900 font-medium text-sm">{{ $name }}</p>
        <p class="text-[#7A2E2E] font-semibold text-sm">{{ $price }}</p>
    </div>
</div>