@props([
    'title' => 'About the class',
    'content' => 'Empty!',
])
<div
    class="w-full">
    <h2
        class="text-[30px] font-['Josefin_Sans',_Helvetica,_Arial,_sans-serif] font-black text-[rgb(82,_48,_10)] leading-[1.2] text-center mb-[5px] max-sm:text-[26px] max-sm:mb-[10px] text-3xl tracking-normal">
        {{ $title }}
    </h2>
    <p
        class=" max-md:px-4 max-sm:mx-[auto] max-sm:mb-[25px] max-sm:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#1e1e1e] leading-[1.556] font-normal text-center mb-[25px] max-md:mb-[45px]">

        {!! $content !!}
    </p>
</div>
