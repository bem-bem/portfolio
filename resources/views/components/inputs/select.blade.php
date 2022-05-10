@props(['name', 'data'])

<select class="form-select @error($name) is-invalid @enderror" name="{{ $name }}">
  <option selected disabled>Open this select menu</option>
  @foreach ($data as $id => $dataName)
    <option value="{{ $id }}"> {{ $dataName }} </option>
    @endforeach
</select>

{{-- error message --}}
@error($name)
<span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
</span>
@enderror