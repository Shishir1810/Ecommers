@props(['value', 'name'])

<div class="mb-3">

<x-utility.from.lavel for="{{ $name.'Input' }}" text="{{ ucfirst($name) }}"/>

<textarea name="{{ $name }}" id="{{ $name.'Input' }}" {{ $attributes->merge(['class'=>'form-control']) }}
   >
    {{ $value }}
</textarea>

<x-utility.from.error name="{{$name}}"/>

</div>
