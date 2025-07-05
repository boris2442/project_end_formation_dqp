@extends('layouts.admin.layout-admin')
@section('title', 'Ajouter une filiere')
@section('content')
<div class="w-full max-w-3xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">Formulaire de Gestion des Filières</h2>

    <form action="#" method="POST" class="space-y-6">
        <!-- ID de la filière -->
        <div>
            <label for="id_filiere" class="block text-sm font-medium mb-1">ID de la filière</label>
            <input type="number" id="id_filiere" name="id_filiere" placeholder="Entrez l'ID de la filière" required
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
        </div>

        <!-- Nom de la filière -->
        <div>
            <label for="nom" class="block text-sm font-medium mb-1">Nom de la filière</label>
            <input type="text" id="nom" name="nom" placeholder="Ex : Informatique" required
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
        </div>

        <!-- Description de la filière -->
        <div>
            <label for="description" class="block text-sm font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="4" placeholder="Décrivez la filière ici..." required
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white resize-none"></textarea>
        </div>

        <!-- Matricule de la filière -->
        <div>
            <label for="matricule_filiere" class="block text-sm font-medium mb-1">Matricule de la filière</label>
            <input type="text" id="matricule_filiere" name="matricule_filiere" placeholder="Ex : INF-01" required
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
        </div>

        <!-- Date de création (automatique) -->
        <div>
            <label for="created_at" class="block text-sm font-medium mb-1">Date de création</label>
            <input type="datetime-local" id="created_at" name="created_at" readonly
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
        </div>

        <!-- Date de mise à jour (automatique) -->
        <div>
            <label for="updated_at" class="block text-sm font-medium mb-1">Date de mise à jour</label>
            <input type="datetime-local" id="updated_at" name="updated_at" readonly
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
        </div>

        <!-- Bouton soumettre -->
        <div class="pt-4">
            <button type="submit"
                class="w-full sm:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Enregistrer la filière
            </button>
        </div>
    </form>
</div>
@endsection



