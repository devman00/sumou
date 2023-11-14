<textarea {{ $attributes->merge(['class'=>'form-control']) }} id="{{ $id }}" name="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}">{{ $slot }}</textarea>
