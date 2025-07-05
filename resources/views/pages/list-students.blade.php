@extends('layouts.admin.layout-admin')
@section('title', 'Liste des Étudiants')
@section('content')
<section>
    <h1 class="text-2xl font-bold mb-6 text-center">Liste des Étudiants</h1>
    @session('success')
    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
        {{ session('success') }}
    </div>
    @endsession


    <div class="overflow-x-auto">
        <form {{-- action="{{ route('education.index') }}" --}} method="get">
            @csrf

            <div class="table-search">
                <div>
                    <select class="search-select " name="title" id="">
                        <option value="">Filtrer les etudiants par: </option>
                        <option value="">Filtrer les etudiants par nom: </option>
                        <option value="">Filtrer les etudiants par email: </option>
                        <option value="">Filtrer les etudiants par sexe: </option>
                        <option value="">Filtrer les etudiants par annee de naissance: </option>
                    </select>
                </div>
                <div class="">

                    <input class="" type="text" name="institution" placeholder="Rechercher le titre de l'institution..."
                        value="">
                    <button class="">Recherche</button>
                    <a href="">
                        <button class="">Réinitialiser</button>
                    </a>
                </div>

            </div>
        </form>
        <div class="">
            <a href="">Add student</a>
        </div>


        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700 text-blue-600 dark:text-gray-300">
                    <th class="px-6 py-3 text-left">ID</th>
                    {{-- <th class="px-6 py-3 text-left">Matricule</th> --}}
                    <th class="px-6 py-3 text-left">Nom</th>
                    <th class="px-6 py-3 text-left">Prénom</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Date de Naissance</th>
                    <th class="px-6 py-3 text-left">Lieu de Naissance</th>
                    <th class="px-6 py-3 text-left">Photo</th>
                    <th class="px-6 py-3 text-left">Adresse</th>
                    <th class="px-6 py-3 text-left">sexe</th>
                    <th class="px-6 py-3 text-left">Telephone</th>
                    <th class="px-6 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr
                    class="border-b dark:border-gray-600 odd:bg-gray-100 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors  duration-200">
                    ">
                    <td class="px-6 py-4">{{ $student->id }}</td>
                    {{-- <td class="px-6 py-4">{{ $student->matricule }}</td> --}}
                    <td class="px-6 py-4">{{ $student->name }}</td>
                    <td class="px-6 py-4">{{ $student->surname }}</td>
                    <td class="px-6 py-4">{{ $student->email }}</td>
                    <td class="px-6 py-4">{{ $student->date_naissance }}</td>
                    <td class="px-6 py-4">{{ $student->lieu_de_naissance }}</td>
                    <td class="px-6 py-4">
                        @if($student->photo)
                        <img src="
                        {{ asset('images/students/' . $student->photo) }}" alt="Photo de {{ $student->name }}"
                            class="w-16 h-16 rounded-full">
                        @else
                        <img src="{{ asset('images/default.png') }}" alt="Photo par défaut"
                            class="w-16 h-16 rounded-full">
                        @endif
                        {{-- {{ $student->photo }} --}}
                    </td>
                    <td class="px-6 py-4">{{ $student->adresse }}</td>
                    <td class="px-6 py-4">{{ $student->sexe }}</td>
                    <td class="px-6 py-4">{{ $student->telephone }}</td>
                    <td class="px-6 py-4">
                        <!-- Actions can be added here -->
                        <a href="
                        {{ route('student.edit', $student->id) }}
                         " class="text-blue-500 hover:underline">Modifier</a>
                        <form method="post" action="{{ route('student.delete', $student->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-400 hover:underline bg-red-500"
                                onclick="confirm ('Are you sure to delete this student?')">Supprimer</button>


                        </form>
                        {{-- <a href="{{ route('student.delete', $student->id) }} " --}} {{--
                            class="text-red-400 hover:underline">Supprimer</a> --}}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links() }}
    </div>
</section>



@endsection