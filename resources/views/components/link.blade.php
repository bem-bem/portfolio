@props(['href'])

<a {{ $attributes->merge(['class' => 'btn']) }} href="{{ $href }}">{{ $slot }}</a>
