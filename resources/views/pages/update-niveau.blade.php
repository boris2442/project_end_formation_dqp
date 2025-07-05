@extends('layouts.admin.layout-admin')
@section('title', 'Modifier un niveau')
@section('content')

<section class="py-8">
    <div class="w-full max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8 relative">
         <a href="{{ route('niveau.index') }}" class="absolute right-0 top-0 bg-red-400 text-white px-3 py-2 rounded hover:text-red-200">Back</a>
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Modifier un niveau</h2>
        <form action="{{ route('niveau.update', $niveau->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium mb-1">Nom du niveau</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                    value="{{ old('name', $niveau->name) }}" />
                @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>



            <div class="pt-4 flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition font-semibold">
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>
</section>
@endsection