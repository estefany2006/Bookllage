@props(['label', 'Type', 'name'])


<div class="form-floating mb-3">
    <input type="{{ $Type }}" class="form-control" id="floatingInput" name="{{ $name }}"
        placeholder="name@example.com">
    <label for="floatingInput">{{ $label }}</label>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>
