@extends('layouts.admin.layout-admin')
@section('title', 'Modifier un frais')
@section('content')

<section class="py-8">
    <div class="w-full max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Modifier un frais</h2>
        <form action="{{ route('frais.update', $frais->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="tranche1" class="block text-sm font-medium mb-1">Tranche 1</label>
                <input type="number" step="0.01" id="tranche1" name="tranche1" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                    value="{{ old('tranche1', $frais->tranche1) }}" />
                @error('tranche1')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="tranche2" class="block text-sm font-medium mb-1">Tranche 2</label>
                <input type="number" step="0.01" id="tranche2" name="tranche2" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                    value="{{ old('tranche2', $frais->tranche2) }}" />
                @error('tranche2')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="tranche3" class="block text-sm font-medium mb-1">Tranche 3</label>
                <input type="number" step="0.01" id="tranche3" name="tranche3" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                    value="{{ old('tranche3', $frais->tranche3) }}" />
                @error('tranche3')
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