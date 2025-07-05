@extends('layouts.admin.layout-admin')
@section('title', 'Ajouter un Étudiant')
@section('content')

<section
    class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-3xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Formulaire de Gestion des Spécialités</h2>

        <form action="#" method="POST" class="space-y-6">
            <!-- ID de la spécialité -->
            <div>
                <label for="id_specialite" class="block text-sm font-medium mb-1">ID de la spécialité</label>
                <input type="number" id="id_specialite" name="id_specialite" placeholder="Entrez l'ID de la spécialité"
                    required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
            </div>

            <!-- Nom de la spécialité -->
            <div>
                <label for="name" class="block text-sm font-medium mb-1">Nom de la spécialité</label>
                <input type="text" id="name" name="name" placeholder="Ex : Informatique" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
            </div>

            <!-- Description de la spécialité -->
            <div>
                <label for="description" class="block text-sm font-medium mb-1">Description</label>
                <textarea id="description" name="description" rows="4" placeholder="Décrivez la spécialité ici..."
                    required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white resize-none"></textarea>
            </div>

            <!-- Matricule de la spécialité -->
            <div>
                <label for="matricule_specialite" class="block text-sm font-medium mb-1">Matricule de la
                    spécialité</label>
                <input type="text" id="matricule_specialite" name="matricule_specialite" placeholder="Ex : INF-01"
                    required
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
                    Enregistrer la spécialité
                </button>
            </div>
        </form>
    </div>
</section>
@endsection