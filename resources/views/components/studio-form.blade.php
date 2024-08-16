@props([])
<div class="mb-[40px] w-full">
    <p class="text-[smaller] max-md:px-4">
        {!! $header ??
            '<b>Unlimited classes for 30 days is £30.</b> <i class="fa-solid fa-star"></i> A simple subscription you can start and stop at the click of a button. This is our regular price, not just a special offer. Alternatively you can pay £12 for just this class. Click \'book in\' to get started.' !!}
    </p>
    <p>&nbsp;</p>
    <form {{ $attributes->merge(['class' => '']) }}>
        {!! $html ?? null !!}
        <div
            class="max-sm:text-[16px] flex items-center justify-center w-full mb-[20px] text-center max-sm:gap-4  max-md:px-4">
            <div>
                <input class="appearance-none hidden peer" type="radio" name="booking_by" id="studio" value="studio"
                    checked>
                <label
                    class='text-[18px] font-["Josefin_Sans",_Helvetica,_Arial,_sans-serif] font-black text-[rgb(53,_54,_53)] flex justify-center items-center w-full sm:w-[185px] h-[48px] overflow-hidden [transition:linear_0.3s] rounded-[10px] border-[2px] border-[solid] border-[#dddddd] mr-[30px] cursor-pointer peer-checked:border-[#f6901c] peer-checked:bg-[#fff] peer-checked:text-[#f6901c] peer-checked:font-extrabold peer-checked:transition-all peer-checked:duration-[0.3s]'
                    for="studio">
                    <img src="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/studio_ic.png"
                        alt="">
                    <span class="pt-[5px] ml-[10px]">Studio</span>
                </label>
            </div>

            <div>
                <input class="appearance-none hidden peer" type="radio" name="booking_by" id="zoom"
                    value="zoom">
                <label
                    class='max-sm:w-full text-[18px] font-["Josefin_Sans",_Helvetica,_Arial,_sans-serif] font-black text-[rgb(53,_54,_53)] flex justify-center items-center w-[185px] h-[48px] overflow-hidden [transition:linear_0.3s] rounded-[10px] border-[2px] border-[solid] border-[#dddddd] mr-[30px] cursor-pointer peer-checked:border-[#f6901c] peer-checked:bg-[#fff] peer-checked:text-[#f6901c] peer-checked:font-extrabold peer-checked:transition-all peer-checked:duration-[0.3s]'
                    for="zoom">
                    <img src="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/fill_video_zoom_ic.png"
                        alt="">
                    <span class="pt-[5px] ml-[10px]">Zoom</span>
                </label>
            </div>
        </div>

        <div class="flex items-center justify-center  max-md:px-4">
            <button
                class="text-[20px] max-sm:w-full font-['Josefin_Sans',_Helvetica,_Arial,_sans-serif] font-normal text-[rgb(255,_255,_255)] leading-[1.2] pt-[20px] px-[62px] pb-[15px] text-center border-[1px] border-[solid] border-[#f5911f] bg-[#f5911f] [transition:all_0.3s_ease_0s] rounded-[10px] cursor-pointer hover:bg-transparent hover:text-[#f5911f] hover:[transition:all_0.3s_ease_0s] max-sm:text-[18px] max-sm:pt-[20px] max-sm:px-[15px] max-sm:pb-[15px]">Book
                in</button>
        </div>

    </form>

</div>
