@props(['name'])

<div class="mb-3">

<x-utility.from.lavel for="{{$name}}Input" text="{{ ucfirst($name) }}"/>

<input name="{{ $name }}" id="{{ $name.'Input' }}"
{{ $attributes->merge([
    'class' => "form-control"
    ]) }}
>

<x-utility.from.error name="{{$name}}"/>

</div>
