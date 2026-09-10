@props(['photo', 'name', 'position', 'review'])

<div class="py-8 border-t border-stone-200">
    <p class="text-stone-700 leading-relaxed mb-6">{{ $review }}</p>
    <div class="flex items-center gap-3">
        <img src="{{ $photo }}" alt="{{ $name }}" class="w-9 h-9 rounded-full object-cover grayscale">
        <div class="text-sm">
            <p class="text-stone-900">{{ $name }}</p>
            <p class="text-stone-500">{{ $position }}</p>
        </div>
    </div>
</div>