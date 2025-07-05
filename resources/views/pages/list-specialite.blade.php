@extends('layouts.admin.layout-admin')
@section('title', 'Liste des Spécialités')
@section('content')
<section
    class="bg-gray-50 dark:bg-gray-900 text-blue-500 dark:text-gray-200 min-h-screen flex items-center justify-center p-4">
    <div class="w-full  bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-6 text-center">Liste des Spécialités</h2>

        <form method="get" class="mb-6 flex justify-between items-center" action="{{ route('specialite.index') }}">

            <div class="flex flex-wrap items-center gap-4 my-4">

                {{-- Filtrer par nom --}}
                <input type="text" name="name" placeholder="Rechercher une specialite par nom..."
                    value="{{ request('name') }}"
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-64" />
                {{-- Bouton recherche --}}
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                    Recherche
                </button>

                {{-- Bouton réinitialiser --}}
                <a href="{{ route('specialite.index') }}"
                    class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 transition ml-2">
                    Réinitialiser
                </a>
                <div class="bg-[#22c55e] text-white px-4 py-2 rounded-md hover:bg-green-600 transition">

                    Total Specialités :
                    {{$specialites->count()}}

                </div>
            </div>
        </form>

        <div class="mb-4">
            <a href="{{ route('specialite.create') }}"
                class="bg-[#22c55e] text-white px-4 py-2 rounded-md hover:bg-green-600 transition">Ajouter une
                specialite</a>
        </div>

        @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
        @endif



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($specialites as $specialite)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold mb-2 text-blue-600">{{ $specialite->name }}</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        @if(strlen($specialite->description) > 40)
                        {{ Str::limit($specialite->description, 40) }}
                        <a href="{{ route('specialite.show', $specialite->id) }}"
                            class="text-blue-500 hover:underline">voir plus...</a>
                        @else
                        {{ $specialite->description }}
                        @endif
                    </p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <a href="{{ route('specialite.edit', $specialite->id) }}"
                        class="text-blue-600 hover:text-blue-900">Modifier</a>
                    <form method="post" action="{{ route('specialite.delete', $specialite->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-4 py-2 rounded-md shadow hover:bg-red-600 transition"
                            onclick="return confirm('Are you sure to delete this speciality?')">Supprimer</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $specialites->links() }}
        </div>
    </div>
</section>
@endsection