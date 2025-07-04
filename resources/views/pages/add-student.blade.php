@extends('layouts.admin.layout-admin')
@section('title', 'Ajouter un Étudiant')
<section class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-3xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">Ajouter un apprenant</h2>
    
    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
      <!-- Nom et Prénom -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="nom" class="block text-sm font-medium mb-1">Nom</label>
          <input 
            type="text" 
            id="nom" 
            name="nom" 
            placeholder="Doe" 
            required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
          />
        </div>

        <div>
          <label for="prenom" class="block text-sm font-medium mb-1">Prénom</label>
          <input 
            type="text" 
            id="prenom" 
            name="prenom" 
            placeholder="John" 
            required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
          />
        </div>
      </div>

      <!-- Sexe -->
      <div>
        <label class="block text-sm font-medium mb-2">Sexe</label>
        <div class="flex space-x-6">
          <label class="inline-flex items-center">
            <input 
              type="radio" 
              name="sexe" 
              value="homme" 
              class="h-4 w-4 text-blue-600 focus:ring-blue-500"
            />
            <span class="ml-2">Homme</span>
          </label>
          <label class="inline-flex items-center">
            <input 
              type="radio" 
              name="sexe" 
              value="femme" 
              class="h-4 w-4 text-blue-600 focus:ring-blue-500"
            />
            <span class="ml-2">Femme</span>
          </label>
          <label class="inline-flex items-center">
            <input 
              type="radio" 
              name="sexe" 
              value="autre" 
              class="h-4 w-4 text-blue-600 focus:ring-blue-500"
            />
            <span class="ml-2">Autre</span>
          </label>
        </div>
      </div>

      <!-- Date de naissance -->
      <div>
        <label for="date_naissance" class="block text-sm font-medium mb-1">Date de naissance</label>
        <input 
          type="date" 
          id="date_naissance" 
          name="date_naissance" 
          required
          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
        />
      </div>

      <!-- Photo de profil -->
      <div>
        <label for="photo" class="block text-sm font-medium mb-1">Photo de profil</label>
        <input 
          type="file" 
          id="photo" 
          name="photo" 
          accept="image/*"
          required
          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
        />
      </div>

      <!-- Image supplémentaire -->
      <div>
        <label for="image_supplementaire" class="block text-sm font-medium mb-1">Image supplémentaire</label>
        <input 
          type="file" 
          id="image_supplementaire" 
          name="image_supplementaire" 
          accept="image/*"
          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
        />
      </div>

      <!-- Bouton soumettre -->
      <div class="pt-4">
        <button 
          type="submit" 
          class="w-full sm:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        >
          Soumettre
        </button>
      </div>
    </form>
  </div>
</section>