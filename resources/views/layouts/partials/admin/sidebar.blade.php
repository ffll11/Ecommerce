@php
//Colocamos los links que va a tener el side bar
    $links = [
        [
            'name' =>'Dashboard',
            'icon' => 'fa-solid fa-gauge',
            'route' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard')
        ],
        [
            'name' =>'Familia',
            'icon' => 'fa-solid fa-box-open',
            'route' => route('admin.familias.index'),
            'active' => request()->routeIs('admin.familias.*'),
        ],
        [
            'name' =>'Categoria',
            'icon' => 'fa-solid fa-box-open',
            'route' => route('admin.categorias.index'),
            'active' => request()->routeIs('admin.categorias.*'),
        ],
        [
            'name' =>'Subfamilia',
            'icon' => 'fa-solid fa-box-open',
            'route' => route('admin.subfamilias.index'),
            'active' => request()->routeIs('admin.subfamilias.*'),
        ]

    ];
@endphp

{{--Agregamos y quitamos clases cob Alpine agregamos ,:class="{}" --}}
<aside id="logo-sidebar"
class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
:class ="{
    'translate-x-0 ease-out': sidebarOpen, {{--sidebar en posicion original--}}
    '-translate-x-full ease-in': !sidebarOpen {{--sidebar estara completamente fuera de la vista --}}
}"
aria-label="Sidebar">
<div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
        @foreach ($links as $link)
            <li>
                <a href="{{$link['route']}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{$link['active'] ? 'bg-gray-100 bg-opacity-50' : '' }}">
                    <span class="inline-flex w-6 h-6 justify-center items-center ">
                        <i class="{{$link['icon']}} text-white" ></i>
                    </span>
                    <span class="ml-2">
                        {{$link['name']}}
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
</aside>
