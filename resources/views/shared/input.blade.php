@php
$type ??= 'text';
$class ??= null;
$name ??= '';
$value ??= '';
$label ??= ucfirst($name);
@endphp
<div @class([ "" , $class])>
@if($type==='textarea') 
 <textarea class="block mt-1 w-full @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}">{{old($name, $value)}} </textarea>
@else
  <input class="block mt-1 w-full @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{old($name, $value)}}">
@endif
@error($name) 
    <div class="invalid-feedback">
         {{$message}}
       </div>
@enderror
</div>

