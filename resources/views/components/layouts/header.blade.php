<header class="bg-header h-header text-white flex justify-between items-center">
    <div class="flex items-center">
        <img src="{{asset('./images/logo.png')}}" alt="logo" class="h-17 m-5 max-h-full">
    </div>
    <h1 class="text-4xl font-bold">{{ __('messages.app_name') }}</h1>
    <div class="flex items-center space-x-2 mr-4">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-sm btn-neutral">
                @php
                    $langs = ['es' => 'Español', 'en' => 'English', 'fr' => 'Français'];
                @endphp
                {{ $langs[app()->getLocale()] ?? 'English' }}
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-32">
                <li><a href="{{ route('lang.switch', 'es') }}" class="text-gray-800">Español</a></li>
                <li><a href="{{ route('lang.switch', 'en') }}" class="text-gray-800">English</a></li>
                <li><a href="{{ route('lang.switch', 'fr') }}" class="text-gray-800">Français</a></li>
            </ul>
        </div>
        @guest
            <a href="{{ route('login') }}" class="btn btn-sm bg-white text-black hover:bg-gray-200">{{ __('messages.login') }}</a>
            <a href="{{ route('register') }}" class="btn btn-sm bg-gray-300 text-black hover:bg-gray-400">{{ __('messages.register') }}</a>
        @endguest
        @auth
            <span class="text-lg font-medium">{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm bg-gray-300 text-black hover:bg-gray-400">{{ __('messages.logout') }}</button>
            </form>
        @endauth
    </div>
</header>