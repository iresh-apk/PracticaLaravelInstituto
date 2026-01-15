@props(['title', 'description', 'route', 'buttonText' => 'Ver'])

<div class="card bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
        {{ $icon ?? '' }}
    </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title">{{ $title }}</h2>
        <p>{{ $description }}</p>
        <div class="card-actions">
            <a href="{{ $route }}" class="btn btn-primary">{{ $buttonText }}</a>
        </div>
    </div>
</div>
