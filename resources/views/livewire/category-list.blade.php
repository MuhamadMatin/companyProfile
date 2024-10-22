<div class="w-full">
    <ul class="flex flex-wrap items-center justify-center gap-4 md:justify-start">
        @forelse ($categories as $category)
            <li wire:click="$set('category', '{{ $category->id }}')"
                class="px-4 py-2 text-center border-2 rounded-full cursor-pointer whitespace-nowrap">
                {{ $category->name }}
            </li>
        @empty
            <p class="px-4 py-2 text-center border-2 rounded-full">Category empty</p>
        @endforelse
    </ul>
</div>
