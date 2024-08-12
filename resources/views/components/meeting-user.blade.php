@props([
    'name' => 'Vinyasa',
    'time' => '09:30',
    'link' => '#',
    'location' => 'Isabelle Watton',
    'image' => '/images/image002.jpg',
    'time_reminder' => '60mins',
    'finished' => null,
    'tooltip' => 'More info or book',
    'studio' => null,
    'online' => null,
    'event' => null,
])

<div class="after:content-[''] after:table after:clear-both @if($finished && $finished != 'false') opacity-[25%] @endif">
    <div class="float-left p-[10px] leading-[60px] text-[1rem] mt-14px" style="margin-top: 14px">{{ $time }}</div>
    <div class="float-left m-[10px] w-16 h-16 rounded-[50%] border-[3px] border-[solid] border-[#F0F0F0] mt-[23px]"
        style="background-image: url('{{ $image }}')">
    </div>
    <div class="float-left leading-[1.4] p-[10px] text-left text-[1rem]">
        <b class="text-[1.5rem] font-[josefin-sans,_Helvetica,_Arial,_sans-serif]">{{ $name }}</b>
        <br />{{ $location }} ~ {{ $time_reminder }} <br />
        @if ($finished)
            <span class="text-[smaller] text-[#f68f1d]">Class finished</span>
        @endif
        <p class="mt-[8px] flex">
            @if ($studio)
                <a href="{{ $link }}">
                    <img src="/images/GreyStudio.png" class="h-6 pr-[10px]" />
                </a>
            @endif
            @if ($online)
                <a href="{{ $link }}">
                    <img src="/images/GreyOnline.png" class="h-6 pr-[10px]" />
                </a>
            @endif
            @if ($event)
                <a href="{{ $link }}">
                    <img src="/images/GreyEvent.png" class="h-6 pr-[10px]" />
                </a>
            @endif
        </p>
    </div>
    <div class="float-right p-[10px] text-right text-[4rem]">
        <div class="relative inline-block group">
            <a href="{{ $link }}" class="text-[#f68f1d]">›</a>
            <span
                class="after:content-[' '] after:absolute after:top-1/2 after:left-full after:-mt-[5px] after:border-[5px] after:border-solid after:border-transparent after:border-l-[#555] text-[small] invisible w-[150px] bg-gray-700 text-white text-center py-1 rounded-md absolute z-10 top-[38px] right-[200%] opacity-0 transition-opacity duration-300 group-hover:visible group-hover:opacity-100 ">{{ $tooltip }}</span>
        </div>
    </div>
</div>
<hr class="border-[.5px] border-[solid] border-[#eef0f2] m-[10px]" />
