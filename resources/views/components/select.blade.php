@props(['label', 'name'])

<select class="form-select border-0 bg-body-secondary mb-3" name="{{ $name }}">
    <option selected>{{ $label }}</option>
    {{ $slot }}
</select>
