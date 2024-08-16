@props([
    'link_find_us' => '#',
    'link_new_studio' => '#',
    'link_howto_join' => '#',
])


<div
    class="w-full rounded-[10px] border border-[solid] border-[#dddddd] mt-[30px] mb-10  md:p-[15px] px-0 py-4 sm:p-[30px] flex justify-around max-md:flex-wrap max-md:justify-center max-md:gap-6">


    <a href="{{ $link_new_studio }}"
        class="hover:text-[#000000] max-sm:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#f6901c] font-normal leading-[1.2] flex items-center justify-center">
        <i class="fa-solid fa-star"></i> &nbsp; New to the studio
    </a>

    <a href="{{ $link_find_us }}"
        class="hover:text-[#000000] max-sm:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#f6901c] font-normal leading-[1.2] flex items-center justify-center">
        <i class="fa-solid fa-map"></i> &nbsp; Finding the studio
    </a>


    <a href="{{ $link_howto_join }}"
        class="hover:text-[#000000] max-sm:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#f6901c] font-normal leading-[1.2] flex items-center justify-center">
        <i class="fa-solid fa-video"></i> &nbsp; How to join on zoom
    </a>


</div>
