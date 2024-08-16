@props([
    'date'              => 'Wed 28 Aug',
    'time'              => '6:00pm',
    'source'            => 'Studio and zoom',
    'remember_time'      => '60mins',
])



<div
    class="mt-[43px] flex items-center justify-center [@media_screen_and(max-width:688px)]:flex-wrap [@media_screen_and(max-width:480px)]:mx-[auto] [@media_screen_and(max-width:480px)]:my-[0] [@media_screen_and(max-width:480px)]:w-[90%] [@media_screen_and(max-width:480px)]:justify-start [@media_screen_and(max-width:480px)]:mt-[33px]">

    <p href="#0"
        class="[@media_screen_and(max-width:360px)]:text-[15px] [@media_screen_and(max-width:480px)]:w-1/2 [@media_screen_and(max-width:480px)]:justify-start text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:688px)]:flex-wrap [@media_screen_and(max-width:688px)]:mb-[20px] ">
        <i class="fa-regular fa-calendar-days"></i> &nbsp;
        {{ $date }}
    </p>
    <span
        class="w-px h-[16px] ml-[30px] mr-[30px] [@media_screen_and(max-width:688px)]:ml-[25px] [@media_screen_and(max-width:688px)]:mr-[25px] [@media_screen_and(max-width:688px)]:w-[0] [@media_screen_and(max-width:688px)]:h-[0] [@media_screen_and(max-width:480px)]:hidden"></span>

    <p 
        class="[@media_screen_and(max-width:360px)]:text-[15px] [@media_screen_and(max-width:480px)]:w-1/2 [@media_screen_and(max-width:480px)]:justify-start text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:688px)]:flex-wrap [@media_screen_and(max-width:688px)]:mb-[20px] ">
        <i class="fa-solid fa-location-pin"></i> &nbsp; {{ $source }}
    </p>


    <span
        class="w-px h-[16px] ml-[30px] mr-[30px] [@media_screen_and(max-width:688px)]:ml-[25px] [@media_screen_and(max-width:688px)]:mr-[25px] [@media_screen_and(max-width:688px)]:w-[0] [@media_screen_and(max-width:688px)]:h-[0] [@media_screen_and(max-width:480px)]:hidden"></span>

    <p href="#0"
        class="[@media_screen_and(max-width:360px)]:text-[15px] [@media_screen_and(max-width:480px)]:w-1/2 [@media_screen_and(max-width:480px)]:justify-start text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:688px)]:flex-wrap [@media_screen_and(max-width:688px)]:mb-[20px] ">
        <i class="fa-solid fa-clock"></i> &nbsp; {{ $time }}
    </p>
    <span
        class="w-px h-[16px] ml-[30px] mr-[30px] [@media_screen_and(max-width:688px)]:ml-[25px] [@media_screen_and(max-width:688px)]:mr-[25px] [@media_screen_and(max-width:688px)]:w-[0] [@media_screen_and(max-width:688px)]:h-[0] [@media_screen_and(max-width:480px)]:hidden"></span>

    <p href="#0"
        class="[@media_screen_and(max-width:360px)]:text-[15px] [@media_screen_and(max-width:480px)]:w-1/2 [@media_screen_and(max-width:480px)]:justify-start text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:688px)]:flex-wrap [@media_screen_and(max-width:688px)]:mb-[20px] ">
        <i class="fa-solid fa-stopwatch"></i> &nbsp; {{$remember_time}}
    </p>

</div>


<div
    class="bg-[#dddddd] w-[600px] h-px mx-[auto] my-[40px] [@media_screen_and(max-width:688px)]:mt-[15px] [@media_screen_and(max-width:688px)]:mx-[auto] [@media_screen_and(max-width:688px)]:mb-[30px] [@media_screen_and(max-width:688px)]:w-full">
</div>
