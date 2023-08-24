@props(['label', 'name', 'type' => 'text'])


<div class="mb-3">
    <input type="{{ $type }}" class="form-control border-0 bg-body-secondary" id="floatingInput" name="{{ $name }}"
           placeholder="{{ $label }}">
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
