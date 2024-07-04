@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-' . rand(100, 900) . ' focus:border-indigo-' . rand(100, 900) . ' focus:ring-indigo-' . rand(100, 900) . ' rounded-md shadow-sm', 'rows' => 4]) !!}></textarea>