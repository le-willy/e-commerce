@props(['active' => false])

<a {{ $attributes->merge(['class' => 'nav-link ' . ($active ? 'black' : '')]) }}
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
