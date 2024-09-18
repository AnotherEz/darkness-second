<div class="py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs($route) ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
    <a href="{{ route($route) }}">{{ $title }}</a>
</div>
