@extends('layouts.admin.layout-admin')
@section('title', 'Liste des niveaux')
@section('content')

<section class="py-8">
    <div class="w-full max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8 relative">
        <a href="{{ route('niveau.create') }}" class="absolute right-0 top-0 bg-green-400 text-white p-1 rounded hover:text-green-200">Ajouter un niveau</a>
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Liste des niveaux</h2>
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-700 text-blue-600 dark:text-gray-300">
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Nom</th>
                        {{-- <th class="px-6 py-3 text-left">Description</th> --}}
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($niveaux as $niveau)
                        <tr class="border-b dark:border-gray-600 odd:bg-gray-100 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                            <td class="px-6 py-4">{{ $niveau->id }}</td>
                            <td class="px-6 py-4">{{ $niveau->name }}</td>
                            {{-- <td class="px-6 py-4">{{ $niveau->description }}</td> --}}
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('niveau.edit', $niveau->id) }}" class="text-blue-500 hover:underline">Modifier</a>
                                <form action="{{ route('niveau.delete', $niveau->id) }}" method="POST" onsubmit="return confirm('Supprimer ce niveau ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-6 text-gray-500">Aucun niveau enregistré.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $niveaux->links() }}
        </div>
    </div>
</section>
@endsection