@extends('admin.admin')
@section('title', $property->exists?"Editer un bien":"Creer un bien")
@section('content')
   <h1>@yield('title')</h1>
   <form class="vstack gap-2" action="{{route($property->exists?'admin.property.update':'admin.property.store',$property)}}" method="post">
      @csrf 
      @method($property->exists? 'PUT':'POST')
         <!-- Titre -->
    <div class="row">
      <div class="col-6">
         <x-input-label for="title" :value="__('Titre')" />
         @include('shared.input',['name'=>'title','value'=> $property->title])
      </div>
      <div class="col-3">
         <x-input-label for="surface" :value="__('Surface')" />
         @include('shared.input',['name'=>'surface','value'=> $property->surface])
      </div>
      <div class="col-3">
         <x-input-label for="price" :value="__('Prix')" />
         @include('shared.input',['name'=>'price','value'=> $property->price])
      </div>
    </div>
    <x-input-label for="description" :value="__('Description')" />
    <x-textarea id="description" class="block mt-1 w-full" name="description" :value="$property->description" />
    <x-input-error :messages="$errors->get('description')" class="mt-2" />
    <div class="row">
      <div class="col-4">
         <x-input-label for="rooms" :value="__('Pieces')" />
         @include('shared.input',['class'=>'col','name'=>'rooms','value'=> $property->rooms])
      </div>
      <div class="col-4">
          <x-input-label for="bedrooms" :value="__('Chambres')" />
           @include('shared.input',['label'=>'chambres','name'=>'bedrooms','value'=> $property->bedrooms])
      </div>
      <div class="col-4">
          <x-input-label for="floor" :value="__('Etage')" />
          @include('shared.input',['class'=>'col','name'=>'floor','value'=> $property->floor])
      </div>
    </div>
    <div class="row">
      <div class="col-4">
           <x-input-label for="address" :value="__('Address')" />
           @include('shared.input',['name'=>'address','value'=> $property->address])
      </div>
      <div class="col-4">
           <x-input-label for="city" :value="__('Ville')" />
           @include('shared.input',['name'=>'city','value'=> $property->city])
      </div>
       <div class="col-4">
           <x-input-label for="postal_code" :value="__('Code postale')" />
           @include('shared.input',['name'=>'postal_code','value'=> $property->postal_code])
       </div>
    </div>
    @include('shared.select',['label'=>'Options','name'=>'options','value'=> $property->options()->pluck('id'),'multiple'=>true,'options'=>$options])
    @include('shared.ckeckbox',['label'=>'Vendu','name'=>'sold','value'=> $property->sold])

     
      <button class="btn btn-primary">
        @if( $property->exists)
        Modifier
        @else
        Créer
        @endif
      </button>
   </form>
@endsection