@props([
    'title' => 'newslatter title',
])
<div {!! $attributes->merge(['class' => 'text-center mt-10']) !!}>
    <h2 class="text-[#5e5e5e] text-[1.8rem]  text-2xl  font-semibold mb-4">
        {{ $title }}
    </h2>
    {{ $slot }}
</div>
