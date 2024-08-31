@props([
    'name' => null,
])
<h2 {!! $attributes->merge(['class' => 'max-md:text-center text-2xl font-semibold my-4']) !!}>
    {{ $name ? $name : $slot }}
</h2>
