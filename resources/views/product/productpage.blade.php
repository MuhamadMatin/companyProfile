<div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
    @forelse ($products as $product)
        <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl">
            <div class="relative h-48 mb-4 overflow-hidden rounded-lg">
                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                    class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105"
                    loading='lazy'>
            </div>
            <h2 class="mb-2 text-xl font-semibold text-gray-800">{{ $product->name }}</h2>
            <p class="mb-4 text-gray-600">{{ Str::limit($product->description, 100) }}</p>
            <a wire:navigate href="{{ route('product.show', $product) }}"
                class="font-medium text-red-600 hover:text-red-900">
                Read More →
            </a>
        </div>
    @empty
        <p class="text-center text-gray-600">Products Empty</p>
    @endforelse
</div>
