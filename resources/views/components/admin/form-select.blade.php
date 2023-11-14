<select {{ $attributes->merge(['class'=>'choices form-select']) }} id={{ $id }} name="{{ $name }}" {{ $isMultiple == "true" ? "multiple" : '' }}  >
   {{ $slot }}
</select>