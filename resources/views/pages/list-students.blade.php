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
        <form method="get" class="mb-6 flex justify-between items-center" action="{{ route('student.index') }}">
          
            <div class="flex flex-col md:flex-row items-center gap-4 my-4">

                {{-- Filtrer par nom --}}
                <input type="text" name="name" placeholder="Nom" value="{{ request('name') }}"
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-64" />

                {{-- Filtrer par email --}}
                <input type="text" name="email" placeholder="Email" value="{{ request('email') }}"
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-64" />

                {{-- Filtrer par sexe --}}
                <select name="sexe"
                    class="border border-gray-300 rounded-md px-3 py-2 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 shadow-sm transition w-full md:w-auto min-w-[150px]">
                    <option value="">Filtrer les etudiants par sexe</option>
                    <option value="Masculin" {{ request('sexe')=='Masculin' ? 'selected' : '' }}>Masculin</option>
                    <option value="Feminin" {{ request('sexe')=='Feminin' ? 'selected' : '' }}>Feminin</option>
                </select>

                {{-- Filtrer par année de naissance --}}
                <input type="text" name="annee_naissance" placeholder="Année de naissance (ex: 2002)"
                    value="{{ request('annee_naissance') }}"
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-64" />

                {{-- Bouton recherche --}}
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                    Recherche
                </button>

                {{-- Bouton réinitialiser --}}
                <a href="{{ route('student.index') }}"
                    class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 transition ml-2">
                    Réinitialiser
                </a>
                <div class="bg-[#22c55e] text-white px-4 py-2 rounded-md hover:bg-green-600 transition">
                    @if($filtre === 'nom')
                    Total pour ce nom : {{$students->total()}}
                    @elseif($filtre === 'sexe')
                    Total pour ce sexe : {{$students->total()}}
                    @elseif($filtre === 'email')
                    Total pour cet email : {{$students->total()}}
                    @elseif($filtre === 'annee_naissance')
                    Total pour cette année : {{$students->total()}}
                    @else
                    Total étudiants : {{$totalEtudiants}}
                    @endif
                </div>
            </div>
        </form>

        <div class="mb-4">
            <a href="{{ route('student.create') }}"
                class="bg-[#22c55e] text-white px-4 py-2 rounded-md hover:bg-green-600 transition">Ajouter un
                étudiant</a>
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
                            <button
                                class="bg-red-500 text-white px-4 py-2 rounded-md shadow hover:bg-red-600 transition"
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