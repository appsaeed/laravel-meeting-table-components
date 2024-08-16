@props([
    'date' => 'Wed 28 Aug',
    'time' => '6:00pm',
    'source' => 'Studio and zoom',
    'remember_time' => '60mins',
])



<div class="w-full flex max-md:grid grid-cols-2 justify-evenly mt-11 sm:mt-9 mx-auto">

    <div class="max-sm:mb-10 text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] md:mb-[20px] flex justify-center items-center">
        <i class="fa-regular fa-calendar-days"></i> &nbsp;
        {{ $date }}
    </div>
    <div class="max-sm:mb-10 text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] md:mb-[20px] flex justify-center items-center">
        <i class="fa-solid fa-location-pin"></i> &nbsp; {{ $source }}
    </div>
    <div class="max-sm:mb-10 text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] md:mb-[20px] flex justify-center items-center">
        <i class="fa-solid fa-clock"></i> &nbsp; {{ $time }}
    </div>
    <div class="max-sm:mb-10 text-[18px] font-['Open_Sans',_sans-serif] text-[#1f1f1f] font-normal leading-[1.2] md:mb-[20px] flex justify-center items-center">
        <i class="fa-solid fa-stopwatch"></i> &nbsp; {{ $remember_time }}
    </div>
</div>


<div class="bg-[#dddddd] w-[600px] h-px my-[40px] md:mt-[15px] mx-auto md:mb-[30px] max-md:w-full">
</div>
