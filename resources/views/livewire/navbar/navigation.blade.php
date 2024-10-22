<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav class="sticky top-0 z-20 flex items-center justify-between w-full px-6 py-2 bg-blue-700">
    <div id="nav-left" class="flex items-center">
        <a wire:navigate href="{{ route('index') }}">
            <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
        </a>
        <div class="hidden ml-5 md:block top-menu">
            <span class="flex space-x-5">
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('article.index')" :active="request()->routeIs('article.index')">
                    {{ __('Articles') }}
                </x-nav-link>
                <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                    {{ __('Products') }}
                </x-nav-link>
            </span>
        </div>
        <div class="block pt-2 pb-3 space-x-5 space-y-1 md:hidden">
            <div class="relative ms-3">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        Menu
                    </x-slot>

                    <x-slot name="content">
                        <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <hr class="border-t border-gray-200">
                        <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth
            <livewire:layout.partials.auth />
        @else
            <livewire:layout.partials.guest />
        @endauth
    </div>
</nav>


{{-- <nav class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between py-4">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
            </div>

            @auth
                <livewire:layout.partials.auth />
            @else
                <livewire:layout.partials.guest />
            @endauth

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                            x-on:profile-updated.window="name = $event.detail.name"></div>
                        <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-responsive-nav-link>
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav> --}}
