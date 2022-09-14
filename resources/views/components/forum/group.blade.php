@props(['name', 'text', 'type', 'placeholder'])
<div class="mb-3 text-left">
    <label for="{{ $name }}Input" class="form-label">{{ $text }}</label>
    <input value="{{ old($name) }}" placeholder="{{ $placeholder ?? '' }}" type="{{ $type ?? 'text' }}" name="{{ $name }}" class="form-control" id="{{ $name }}Input" aria-describedby="{{ $name }}Error">
    @error($name)<div id="{{ $name }}Error" class="form-text text-danger">{{ $message }}</div>@enderror
</div>