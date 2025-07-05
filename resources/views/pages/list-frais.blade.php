@extends('layouts.admin.layout-admin')
@section('title','lister les frais')
@section('content')

<section class="py-8">
    <div class="w-full max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8 relative">
         <a href="{{ route('frais.index') }}" class="absolute right-0 top-0 bg-green-400 text-white px-3 py-2 rounded hover:text-green-200">Add frais</a>
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Liste des Frais</h2>
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
                        <th class="px-6 py-3 text-left">Tranche 1</th>
                        <th class="px-6 py-3 text-left">Tranche 2</th>
                        <th class="px-6 py-3 text-left">Tranche 3</th>
                        <th class="px-6 py-3 text-left">Total</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($frais as $item)
                    <tr
                        class="border-b dark:border-gray-600 odd:bg-gray-100 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                        <td class="px-6 py-4">{{ $item->id }}</td>
                        <td class="px-6 py-4">{{ number_format($item->tranche1, 2, ',', ' ') }} FCFA</td>
                        <td class="px-6 py-4">{{ number_format($item->tranche2, 2, ',', ' ') }} FCFA</td>
                        <td class="px-6 py-4">{{ number_format($item->tranche3, 2, ',', ' ') }} FCFA</td>
                        <td class="px-6 py-4 font-bold text-green-600">{{ number_format($item->total, 2, ',', ' ') }}
                            FCFA</td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('frais.edit', $item->id) }}"
                                class="text-blue-500 hover:underline">Modifier</a>
                            <form action="{{ route('frais.delete', $item->id) }}" method="POST"
                                onsubmit="return confirm('Supprimer ce frais ?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500">Aucun frais enregistré.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $frais->links() }}
        </div>
    </div>
</section>

@endsection