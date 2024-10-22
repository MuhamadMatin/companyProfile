<x-app-layout>
    @section('hero')
        <div class="mx-auto">
            <div class="relative" x-data="{ activeSlide: 0, slides: ['one.png', 'two.png', 'three.png', 'four.png', 'five.png'] }">
                <!-- Carousel wrapper -->
                <div class="relative w-full overflow-hidden h-72">
                    <!-- Slide Images -->
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="activeSlide === index" class="absolute inset-0 transition-all duration-500">
                            <img :src="'/images/' + slide" alt="" class="object-cover w-full h-full">
                        </div>
                    </template>
                </div>

                {{-- <button @click="activeSlide = (activeSlide === 0) ? slides.length - 1 : activeSlide - 1"
                    class="absolute p-2 text-white transform -translate-y-1/2 bg-gray-800 rounded-full top-1/2 left-2 h-14 w-14">
                    <svg class="fill-white" fill="" height="" width="" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512.006 512.006" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                        d="M388.419,475.59L168.834,256.005L388.418,36.421c8.341-8.341,8.341-21.824,0-30.165s-21.824-8.341-30.165,0 L123.586,240.923c-8.341,8.341-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251 c5.461,0,10.923-2.091,15.083-6.251C396.76,497.414,396.76,483.931,388.419,475.59z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>

                <button @click="activeSlide = (activeSlide === slides.length - 1) ? 0 : activeSlide + 1"
                    class="absolute w-12 h-12 p-2 text-white transform -translate-y-1/2 bg-gray-800 rounded-full top-1/2 right-2">
                    <svg class="fill-white" fill="none" height="" width="" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                        xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="XMLID_222_"
                                d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001 c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213 C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606 C255,161.018,253.42,157.202,250.606,154.389z">
                            </path>
                        </g>
                    </svg>
                </button> --}}

                <!-- Dots (for showing current slide) -->
                <div class="absolute flex space-x-2 transform -translate-x-1/2 bottom-4 left-1/2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                            :class="{ 'bg-yellow-400': activeSlide === index, 'bg-gray-200': activeSlide !== index }"
                            class="w-3 h-3 transition-all rounded-full"></button>
                    </template>
                </div>
            </div>
        </div>
    @endsection
    <div class="container px-6 mx-auto mt-10">
        <div>
            <h1 class="mb-4 text-2xl font-bold md:text-4xl">About We Are</h1>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <span class="flex items-center mb-2 gap-x-4">
                    <h2 class="text-xl font-semibold">PT Creative</h2>
                    <a wire:navigate href="{{ route('about') }}" class="font-medium text-red-600 hover:text-red-900">
                        Read About Us →
                    </a>
                </span>
                <p class="leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem commodi recusandae eaque
                    laudantium aperiam at aliquam
                    voluptas animi ullam a, ad repellat quaerat autem sequi soluta corporis neque deleniti magnam. Unde
                    quidem, quibusdam
                    exercitationem adipisci minus doloribus harum eligendi repellendus quod sit odit dolor veritatis.
                    Quod
                    iure qui suscipit
                    perspiciatis minima voluptatum provident ad consequuntur modi laboriosam, ea minus accusantium
                    recusandae soluta porro,
                    distinctio non aliquam voluptates doloremque esse veritatis atque? Inventore at earum architecto
                    provident odit asperiores magnam
                    suscipit impedit voluptates. Voluptates sint, quia dolor quam necessitatibus maiores et atque minus
                    doloribus voluptate iusto!
                    Perferendis laborum at suscipit voluptates.
                </p>
            </div>
        </div>

        <div class="container mx-auto my-10">
            <span class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold md:text-4xl">We Are Products</h1>
                <a wire:navigate href="{{ route('product.index') }}"
                    class="font-medium text-red-600 hover:text-red-900">
                    Explore Our Products →
                </a>
            </span>
            @include('product.productpage', ['products' => $products])
        </div>

        <div class="container py-8 mx-auto">
            <span class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold md:text-4xl">Latest Articles</h1>
                <a wire:navigate href="{{ route('article.index') }}"
                    class="font-medium text-red-600 hover:text-red-900">
                    Read Our Articles →
                </a>
            </span>
            @include('article.articlepage', ['articles' => $articles])
        </div>
    </div>
</x-app-layout>
