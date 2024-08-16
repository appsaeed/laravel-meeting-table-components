@props([])
<div
    class="mt-[0] mx-[auto] mb-[40px] w-[800px] [@media_screen_and(max-width:820px)]:w-auto [@media_screen_and(max-width:480px)]:w-auto">
    <p class="text-[smaller]">
        {!! $header ??
            '<b>Unlimited classes for 30 days is £30.</b> <i class="fa-solid fa-star"></i> A simple subscription you can start and stop at the click of a button. This is our regular price, not just a special offer. Alternatively you can pay £12 for just this class. Click \'book in\' to get started.' !!}
    </p>
    <p>&nbsp;</p>
    <form {{ $attributes->merge(['class' => '']) }}>
        {!! $html ?? null !!}
        <div
            class="[@media_screen_and(max-width:480px)]:text-[16px] flex items-center justify-center w-full mb-[20px] text-center">
            <div>
                <input class="appearance-none hidden peer" type="radio" name="booking_by" id="studio" value="studio"
                    checked>
                <label
                    class='text-[18px] font-["Josefin_Sans",_Helvetica,_Arial,_sans-serif] font-black text-[rgb(53,_54,_53)] flex justify-center items-center w-[185px] h-[48px] overflow-hidden [transition:linear_0.3s] rounded-[10px] border-[2px] border-[solid] border-[#dddddd] mr-[30px] cursor-pointer peer-checked:border-[#f6901c] peer-checked:bg-[#fff] peer-checked:text-[#f6901c] peer-checked:font-extrabold peer-checked:transition-all peer-checked:duration-[0.3s]'
                    for="studio">
                    <img src="images/studio_ic.png" alt="">
                    <span class="pt-[5px] ml-[10px]">Studio</span>
                </label>
            </div>

            <div>
                <input class="appearance-none hidden peer" type="radio" name="booking_by" id="zoom"
                    value="zoom">
                <label
                    class='text-[18px] font-["Josefin_Sans",_Helvetica,_Arial,_sans-serif] font-black text-[rgb(53,_54,_53)] flex justify-center items-center w-[185px] h-[48px] overflow-hidden [transition:linear_0.3s] rounded-[10px] border-[2px] border-[solid] border-[#dddddd] mr-[30px] cursor-pointer peer-checked:border-[#f6901c] peer-checked:bg-[#fff] peer-checked:text-[#f6901c] peer-checked:font-extrabold peer-checked:transition-all peer-checked:duration-[0.3s]'
                    for="zoom">
                    <img src="images/fill_video_zoom_ic.png" alt="">
                    <span class="pt-[5px] ml-[10px]">Zoom</span>
                </label>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <button
                class="text-[20px] font-['Josefin_Sans',_Helvetica,_Arial,_sans-serif] font-normal text-[rgb(255,_255,_255)] leading-[1.2] pt-[20px] px-[62px] pb-[15px] text-center border-[1px] border-[solid] border-[#f5911f] bg-[#f5911f] [transition:all_0.3s_ease_0s] rounded-[10px] cursor-pointer hover:bg-transparent hover:text-[#f5911f] hover:[transition:all_0.3s_ease_0s] [@media_screen_and(max-width:480px)]:w-full [@media_screen_and(max-width:480px)]:text-[18px] [@media_screen_and(max-width:480px)]:pt-[20px] [@media_screen_and(max-width:480px)]:px-[47px] [@media_screen_and(max-width:480px)]:pb-[15px] [@media_screen_and(max-width:360px)]:pt-[20px] [@media_screen_and(max-width:360px)]:px-[15px] [@media_screen_and(max-width:360px)]:pb-[15px]">Book
                in</button>
        </div>

    </form>

</div>
