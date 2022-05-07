@props(['type' => 'text', 'name', 'value' => null, 'autofocus' => false])

<input class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" type="{{ $type }}"
    name="{{ $name }}" value="{{ $value }}" autocomplete="{{ $name }}" {{ $autofocus==true ? 'autofocus' : '' }}>

{{-- error message --}}
@error($name)
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror