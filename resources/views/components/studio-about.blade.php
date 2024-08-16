@props([
    'title' => 'About the class',
    'content' => 'Empty!',
])
<div
    class="mx-[auto] my-0 w-[800px] [@media_screen_and(max-width:820px)]:w-auto [@media_screen_and(max-width:480px)]:w-auto">
    <h2
        class="text-[30px] font-['Josefin_Sans',_Helvetica,_Arial,_sans-serif] font-black text-[rgb(82,_48,_10)] leading-[1.2] text-center mb-[5px] [@media_screen_and(max-width:480px)]:text-[26px] [@media_screen_and(max-width:480px)]:mb-[10px] text-3xl tracking-normal">
        {{ $title }}
    </h2>
    <p
        class="[@media_screen_and(max-width:480px)]:max-w-[289px] [@media_screen_and(max-width:480px)]:mt-[0] [@media_screen_and(max-width:480px)]:mx-[auto] [@media_screen_and(max-width:480px)]:mb-[25px] [@media_screen_and(max-width:480px)]:text-[16px] text-[18px] font-['Open_Sans',_sans-serif] text-[#1e1e1e] leading-[1.556] font-normal text-center mb-[25px] [@media_screen_and(max-width:688px)]:max-w-[545px] [@media_screen_and(max-width:688px)]:mt-[0] [@media_screen_and(max-width:688px)]:mx-[auto] [@media_screen_and(max-width:688px)]:mb-[45px]">

        {!! $content !!}
    </p>
</div>
