<x-app-layout>
    <div class="container px-6 mx-auto my-10">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                    class="object-cover w-full rounded-lg shadow-md h-80">
            </div>

            <!-- Product Details -->
            <div class="mt-6 md:w-1/2 md:ml-10 md:mt-0">
                <h1 class="text-2xl font-bold text-gray-800">{{ $product->name }}</h1>
                <p>Category: {{ $product->category->name }}</p>
                <a href=""
                    class="inline-block px-4 py-2 mt-4 font-semibold text-white duration-150 bg-yellow-500 rounded-lg md:mt-6 hover:bg-yellow-600">
                    Buy this
                </a>
            </div>
        </div>
        <p class="p-5 mt-4 text-lg text-gray-700 shadow-lg">{{ $product->desk }}</p>
    </div>
</x-app-layout>
