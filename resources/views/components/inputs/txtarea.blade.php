@props(['rows' => '3', 'name', 'placeholder' => null, 'autofocus' => false])

<textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" placeholder="{{ $placeholder }}" id="exampleFormControlTextarea1" rows="{{ $rows }}">{{ $slot }}</textarea>

{{-- error message --}}
@error($name)
<span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
</span>
@enderror