@props([
    'classes' => 0,
    'since' => date('Y'),
    'minutes' => 0,
])
<div {!! $attributes->merge(['class' => 'max-sm:flex-wrap mb-9 flex justify-center max-md:flex-col gap-5']) !!}>
    <div
        class="rounded-[10px] bg-[rgb(232,_234,_233)] w-[200px] h-[100px] flex items-center justify-center flex-col max-sm:mr-0 max-sm:w-full">
        <h2
            class="max-md:mt-[0.20em] text-2xl font-semibold mt-0 mb-2 text-[40px] font-['Open_Sans',_sans-serif] text-[rgb(94,_94,_94)] leading-[1.2] ">
            {{ $classes }}
        </h2>
        <p class="text-[16px] font-['Open_Sans',_sans-serif] text-[#5e5e5e] font-semibold leading-[1.2]">
            Classes
        </p>
    </div>
    <div
        class="rounded-[10px] bg-[rgb(232,_234,_233)] w-[200px] h-[100px] flex items-center justify-center flex-col max-sm:mr-0 max-sm:w-full">
        <h2
            class="max-md:mt-[0.20em] text-2xl font-semibold mt-0 mb-2 text-[40px] font-['Open_Sans',_sans-serif] text-[rgb(94,_94,_94)] leading-[1.2] ">
            {{ $minutes }}
        </h2>
        <p class="text-[16px] font-['Open_Sans',_sans-serif] text-[#5e5e5e] font-semibold leading-[1.2]">
            Yoga Minutes
        </p>
    </div>
    <div
        class="rounded-[10px] bg-[rgb(232,_234,_233)] w-[200px] h-[100px] flex items-center justify-center flex-col max-sm:mr-0 max-sm:w-full">
        <h2
            class="max-md:mt-[0.20em] text-2xl font-semibold mt-0 mb-2 text-[40px] font-['Open_Sans',_sans-serif] text-[rgb(94,_94,_94)] leading-[1.2] ">
            {{ $since }}
        </h2>
        <p class="text-[16px] font-['Open_Sans',_sans-serif] text-[#5e5e5e] font-semibold leading-[1.2]">
            Yogi Since
        </p>
    </div>
</div>
