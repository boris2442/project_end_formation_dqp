@extends('layouts.admin.layout-admin')
@section('title', 'Ajouter un Étudiant')
@section('content')
<section
    class="bg-gray-50 dark:bg-gray-900 text-blue-500 dark:text-gray-200 min-h-screen flex items-center justify-center p-4 ">
    <div class="w-full max-w-3xl relative bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Modifier un apprenant</h2>
        <div class=""><a href="{{ route('student.index') }}" class='absolute bg-red-400 right-0 top-0 px-4 py-1 rounded text-white hover:text-red-300'>Back</a></div>

        <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')
            <!-- Message de succès -->
            @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
            @endif
            <!-- Message d'erreur -->
            {{-- @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded-md mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}


            <!-- Nom et Prénom -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> --}}
                <div>
                    <label for="nom" class="block text-sm font-medium mb-1">Nom de l'etudiant</label>
                    <input type="text" id="nom" name="name" placeholder="Doe" required
                        value="{{ old('name', $student->name) }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                    @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="prenom" class="block text-sm font-medium mb-1">Prénom</label>
                    <input type="text" id="prenom" name="surname" placeholder="John" required
                        value="{{ old('surname', $student->surname) }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                    @error('surname')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">email</label>
                    <input type="text" id="email" name="email" placeholder="etudiant@gmail.com" required
                        value="{{ old('email', $student->email) }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                    @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{--
            </div> --}}

            <!-- Sexe -->
            <div>
                <label class="block text-sm font-medium mb-2">Sexe</label>
                <div class="flex space-x-6">
                    <label class="inline-flex items-center">
                        <input type="radio" name="sexe" value="Masculin"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500" {{ old('sexe', $student->sexe) ==
                        'Masculin' ? 'checked' : '' }} />
                        <span class="ml-2">Homme</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="sexe" value="Feminin"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500" {{ old('sexe', $student->sexe) ==
                        'Feminin' ? 'checked' : '' }} />
                        <span class="ml-2">Femme</span>
                    </label>
                </div>
            </div>

            <!-- Date de naissance -->
            <div>
                <label for="date_naissance" class="block text-sm font-medium mb-1">Date de naissance</label>
                <input type="date" id="date_naissance" name="date_naissance" required
                    value="{{ old('date_naissance', $student->date_naissance) }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                @error('date_naissance')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="lieu" class="block text-sm font-medium mb-1">Lieu de naissance</label>
                <input type="text" id="lieu" name="lieu_de_naissance" placeholder="Lieu de naissance" required
                    value="{{ old('lieu_de_naissance', $student->lieu_de_naissance) }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                @error('lieu')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="adresse" class="block text-sm font-medium mb-1">Adresse</label>
                <input type="text" id="adresse" name="adresse" placeholder="Adresse" required
                    value="{{ old('adresse', $student->adresse) }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                @error('adresse')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="telephone" class="block text-sm font-medium mb-1">Telephone</label>
                <input type="text" id="telephone" name="telephone" placeholder="Telephone" required
                    value="{{ old('telephone', $student->telephone) }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                @error('telephone')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Photo de profil -->
            <div>
                <label for="photo" class="block text-sm font-medium mb-1">Photo de profil</label>
                <input type="file" id="photo" name="photo" accept="image/*" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-blue-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('photo')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>




            <!-- Bouton soumettre -->
            <div class="pt-4">
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update l'étudiant
                </button>
            </div>
        </form>
    </div>
</section>
@endsection