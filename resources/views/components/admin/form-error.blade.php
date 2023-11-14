@error($field)
    <span {{ $attributes->merge(['class' => "invalid-feedback d-block"]) }}> {{ $message }} </span>
@enderror
