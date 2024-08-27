<div {!! $attributes->merge([
    'class' =>
        'rounded-[10px]  [box-shadow:0px_0px_30px_0px_rgba(0,_0,_0,_0.1)] px-[30px] py-[10px] mt-[0] mx-[auto] mb-[20px]s mb-4 max-md:w-auto max-sm:px-[20px] max-sm:py-[10px]',
]) !!}>
    {{ $slot }}
</div>
