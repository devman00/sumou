{{-- @props([
    'value' => Null,
    'id' => Null,
    'placeholder' => Null,
]) --}}
 
<input type="password" {{ $attributes->merge(['class'=>'form-control']) }}  id="{{ $id }}" placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}">
