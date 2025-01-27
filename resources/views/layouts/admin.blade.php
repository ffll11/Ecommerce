@props(['breadcrumbs' => []])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased" x-data="{ sidebarOpen: false }" :class="{ 'overflow-y-hidden': sidebarOpen }">

    <!-- Overlay when sidebar is open (for small screens) -->
    <div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-20 sm:hidden"
         style="display: none;"
         x-show="sidebarOpen"
         x-on:click="sidebarOpen = false">
    </div>

    <!-- Navigation -->
    @include('layouts.partials.admin.navigation')

    <!-- Sidebar -->
    @include('layouts.partials.admin.sidebar')

    <!-- Main content -->
    <div class="p-4 sm:ml-64">
        <div class="mt-14">

            <div class="flex justify-between items-center">
                <!-- Breadcrumbs -->
                @include('layouts.partials.admin.breadcrumb')

                @isset($action)
                    <div>
                        {{$action}}
                    </div>
                @endisset
            </div>
            <div>

            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                {{$slot}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireScripts

    @stack('js')

    @if (session('swal'))
        <script>
            Swal.fire({!!json_encode(session('swal'))!!});
        </script>
    @endif
</body>
</html>
