<x-layouts.layout>
<div
  class="hero h-full"
  style="background-image: url(https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1920);"
>
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-2xl">
      <h1 class="mb-5 text-5xl font-bold">{{ __('messages.welcome_title') }}</h1>
      <p class="mb-5 text-lg">
        {{ __('messages.welcome_description') }}
      </p>
      @guest
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">{{ __('messages.access_system') }}</a>
      @else
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">{{ __('messages.go_dashboard') }}</a>
      @endguest
    </div>
  </div>
</div>
</x-layouts.layout>

