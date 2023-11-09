@error($field)
    <span {{ $attributes->merge(['class' => "invalid-feedback d-block fs-15px py-2"]) }}> {{ $message }} </span>
@enderror
