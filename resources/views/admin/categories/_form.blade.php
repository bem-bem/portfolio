
<div class="mb-3">
  <x-inputs.label for="name">{{ __('Category name') }}</x-inputs.label>
  <x-inputs.input name="name" value="{{ old('name' , optional($category ?? null)->name) }}" autofocus="{{ true }}" />
</div>
<div class="mb-3">
  <x-inputs.label for="slug">{{ __('Category Slug') }}</x-inputs.label>
  <x-inputs.input name="slug" value="{{ old('slug' , optional($category ?? null)->slug) }}" />
</div>