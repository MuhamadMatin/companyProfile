<x-app-layout>
    <div class="container py-8 mx-auto">
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h1 class="mb-4 text-2xl font-bold text-gray-900 md:text-3xl">
                {{ $article->title }}
            </h1>

            <p class="text-sm text-gray-600">Published on: {{ $article->created_at->format('M d, Y') }}</p>

            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="object-cover w-full h-64 mb-4 rounded-lg"
                loading="lazy">

            <div class="mb-4 tracking-wide prose">
                {!! $article->body !!}
            </div>

            <a wire:navigate href="{{ route('article.index') }}"
                class="font-medium text-indigo-600 hover:text-indigo-900">
                &larr; Back to Articles
            </a>
        </div>
    </div>
</x-app-layout>
