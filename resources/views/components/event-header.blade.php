@props([
    'title' => 'Events',
    'sub_title' => 'Click here to see watchAnytime online
        workshops »',
    'link' => '#',
])
<h1 {!! $attributes->merge([
    'class' =>
        "mb-0 mt-[90px] font-['Work_Sans'] text-[54.015999px] not-italic font-bold tracking-[0.54016px] leading-[59.115108px] text-[rgb(0,_0,_0)] block text-center",
]) !!}>
    {{ $title }}
</h1>
<p class="text-[smaller] mt-[10px] ml-[10px] text-center">
    <a href="{{ $link }}" class="text-[rgb(244,_136,_71)]">
        {{ $sub_title }}
    </a>
</p>
<p>&nbsp;</p>
