<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100 font-sans">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex flex-col">
        <div class="p-6 font-bold text-xl">🚀 Admin</div>
        <nav class="flex-1 px-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">Dashboard</a>
            <a href="{{ route('admin.projects') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.projects*') ? 'bg-gray-700' : '' }}">Projets</a>
            <a href="{{ route('admin.skills') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.skills*') ? 'bg-gray-700' : '' }}">Compétences</a>
            <a href="{{ route('admin.contacts') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.contacts*') ? 'bg-gray-700' : '' }}">Contacts</a>
        </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 p-6 overflow-auto">
        <h1 class="text-3xl font-bold mb-6">@yield('page-title')</h1>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
