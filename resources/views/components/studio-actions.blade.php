@props([
    'link_find_us' => '#',
    'link_new_studio' => '#',
    'link_howto_join' => '#'
])


<div class="my-0 mx-[auto] w-[800px] [@media_screen_and(max-width:820px)]:w-auto [@media_screen_and(max-width:480px)]:w-auto">
    <div
        class="rounded-[10px] border-[1px] border-[solid] border-[#dddddd] px-[0] py-[15px] flex items-center justify-center w-[800px] mt-[30px] mx-[auto] mb-[40px] [@media_screen_and(max-width:820px)]:flex-wrap [@media_screen_and(max-width:820px)]:w-auto [@media_screen_and(max-width:820px)]:p-[15px] [@media_screen_and(max-width:480px)]:w-auto [@media_screen_and(max-width:480px)]:p-[30px] [@media_screen_and(max-width:480px)]:justify-start [@media_screen_and(max-width:360px)]:p-[20px] gap-10">


        <a href="{{ $link_new_studio }}"
            class="hover:text-[#000000] [@media_screen_and(max-width:360px)]:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#f6901c] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:745px)][&:nth-child(3)]:mt-4 [@media_screen_and(max-width:480px)][&:nth-child(3)]:mt-4">
            <i class="fa-solid fa-star"></i> &nbsp; New to the studio
        </a>

        <a href="{{ $link_find_us }}"
            class="hover:text-[#000000] [@media_screen_and(max-width:360px)]:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#f6901c] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:745px)][&:nth-child(3)]:mt-4 [@media_screen_and(max-width:480px)][&:nth-child(3)]:mt-4">
            <i class="fa-solid fa-map"></i> &nbsp; Finding the studio
        </a>


        <a href="{{ $link_howto_join }}"
            class="hover:text-[#000000] [@media_screen_and(max-width:360px)]:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#f6901c] font-normal leading-[1.2] flex items-center justify-center [@media_screen_and(max-width:745px)][&:nth-child(3)]:mt-4 [@media_screen_and(max-width:480px)][&:nth-child(3)]:mt-4">
            <i class="fa-solid fa-video"></i> &nbsp; How to join on zoom
        </a>


    </div>
</div>