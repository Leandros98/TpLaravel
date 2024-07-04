<x-app-layout>
    @extends('admin.admin')
    @section('title','Tableau de Bord')
    <x-slot name="header">
     <h1>@yield('title')</h1>
  </x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h2 class="text-lg font-bold mb-2">Propriétés Totales</h2>
                        <p class="text-4xl font-bold">{{ $totalProperties }}</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h2 class="text-lg font-bold mb-2">Propriétés Vendues</h2>
                        <p class="text-4xl font-bold">{{ $soldProperties }}</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h2 class="text-lg font-bold mb-2">Propriétés Non Vendues</h2>
                        <p class="text-4xl font-bold">{{ $unsoldProperties }}</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6 w-full">
                        <h3 class="text-md font-bold mb-2 text-center">Statistiques des Propriétés (Pourcentages)</h3>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Statut</th>
                                    <th class="px-4 py-2">Pourcentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Vendu</td>
                                    <td class="border px-4 py-2 text-center">{{ $propertyStats['sold_percentage'] }}%</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Non Vendu</td>
                                    <td class="border px-4 py-2 text-center">{{ $propertyStats['unsold_percentage'] }}%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>