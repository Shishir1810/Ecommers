@props(['message', 'type'=>'success'])

@if($message)
<div role="alert" {{$attributes->merge(['class'=>'alert alert-'.$type])}}>
    {{$message}}
</div>
@endif
