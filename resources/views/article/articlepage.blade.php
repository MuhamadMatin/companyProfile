<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @forelse ($articles as $article)
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-2xl">
            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="object-cover w-full h-48" loading='lazy'>

            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-900">
                    {{ $article->title }}
                </h3>

                <p class="text-sm text-gray-500">
                    {{ $article->created_at->format('d M Y') }}
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    {{ Str::limit($article->body, 100) }}
                </p>

                <div class="mt-4">
                    <a wire:navigate href="{{ route('article.show', $article->slug) }}"
                        class="font-medium text-red-600 hover:text-red-900">
                        Read More →
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center text-gray-500">Articles Empty</p>
    @endforelse
</div>
