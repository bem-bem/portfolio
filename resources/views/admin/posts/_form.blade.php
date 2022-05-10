
<div class="mb-3">
    <x-inputs.label for="title">{{ __('Post Title') }}</x-inputs.label>
    <x-inputs.input name="title" value="{{ old('title' , optional($post ?? null)->title) }}" autofocus="{{ true }}" />
  </div>
  <div class="mb-3">
    <x-inputs.label for="slug">{{ __('Post Slug') }}</x-inputs.label>
    <x-inputs.input name="slug" value="{{ old('slug' , optional($post ?? null)->slug) }}" />
  </div>
  <div class="mb-3">
    <x-inputs.label for="category_id">{{ __('Category') }}</x-inputs.label>
    <x-inputs.select :data="$categories" name="category_id" />
  </div>
  <div class="mb-3">
    <x-inputs.label for="path">{{ __('Post image') }}</x-inputs.label>
    <x-inputs.input type="file" name="thumbnail" />
  </div>
  <div class="mb-3">
    <x-inputs.label for="intro">{{ __('Intro') }}</x-inputs.label>
    <x-inputs.input name="intro" value="{{ old('slug' , optional($post ?? null)->slug) }}" />
  </div>
  <div class="mb-3">
    <x-inputs.label for="content">{{ __('Content') }}</x-inputs.label>
    <x-inputs.txtarea name="content" rows="3">{{ old('content' , optional($post ?? null)->content) }}</x-inputs.txtarea>
  </div>