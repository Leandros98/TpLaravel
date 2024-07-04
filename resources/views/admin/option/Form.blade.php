<x-app-layout>
    @extends('admin.admin')
    @section('title', $option->exists ? "Editer une option" : "Créer une option")

    <div class="container">
        <x-slot name="header">
            <h1>@yield('title')</h1>
            <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="post">
                @csrf
                @method($option->exists ? 'PUT' : 'POST')

                @include('shared.input', ['class' => 'col', 'label' => 'Nom', 'name' => 'name', 'value' => $option->name])

                <button class="btn btn-primary">
                    @if ($option->exists)
                        Modifier
                    @else
                        Créer
                    @endif
                </button>
            </form>
        </x-slot>
    </div>
</x-app-layout>