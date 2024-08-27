@props([
    'email' => 'example@company.com',
    'title' => ' Classes can now be cancelled up to 1hr in advance using the link by the class above.',
    'passes_link' => '#',
    'attendance_link' => '#',
    'details_link' => '#',
])
<div {!! $attributes->merge(['class' => 'mt-10']) !!}>
    <p class="text-[smaller] italic text-center pb-2.5">
        {{ $title }}
    </p>
    <p class="text-[smaller] italic text-center">
        Workshops will be refunded only if we can find someone to take your place. <br />Obviously
        we will take account of exceptional circumstances - just drop us an email at
        <a class="text-[rgb(244,_136,_71)]" href="mailto:{{ $email }}">
            {{ $email }}
        </a>.
    </p>
    <div class="clear-both">&nbsp;</div>
    <div class="mt-10 flex max-md:flex-col max-md:gap-7 items-center justify-center gap-2">
        <div class="flex items-center justify-center">
            <a href="{{ $passes_link }}">
                <p
                    class="text-[18px] font-['Open_Sans',_sans-serif] font-normal text-[#1f1f1f] leading-[1.2] flex items-center justify-center">
                    <i class="fa-solid fa-ticket-simple text-[rgb(244,_136,_71)]"></i> &nbsp;
                    Passes
                </p>
            </a>
        </div>
        <span class="w-px h-[16px] ml-[30px] mr-[30px] bg-[rgb(62,_62,_62,_0.22)] max-md:hidden"></span>
        <div class="flex items-center justify-center">
            <a href="{{ $attendance_link }}">
                <p
                    class="text-[18px] font-['Open_Sans',_sans-serif] font-normal text-[#1f1f1f] leading-[1.2] flex items-center justify-center">
                    <i class="fa-solid fa-rectangle-list text-[rgb(244,_136,_71)]"></i> &nbsp;
                    Attendance
                </p>
            </a>
        </div>
        <span class="w-px h-[16px] ml-[30px] mr-[30px] bg-[rgb(62,_62,_62,_0.22)] max-md:hidden"></span>
        <div class="flex items-center justify-center">
            <a href="{{ $details_link }}">
                <p
                    class="text-[18px] font-['Open_Sans',_sans-serif] font-normal text-[#1f1f1f] leading-[1.2] flex items-center justify-center">
                    <i class="fa-solid fa-address-card text-[rgb(244,_136,_71)]"></i> &nbsp; Your
                    details
                </p>
            </a>
        </div>
    </div>
    <p>&nbsp;</p>
</div>
