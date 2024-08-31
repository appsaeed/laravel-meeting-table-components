@props([
    'title' => '',
    'image' => '',
    'description' => '',
    'date' => '',
    'link' => '',
    'waitlist' => null,
    'specialist' => '',
    'for' => null,
    'place' => 'studio',
])
@php
    $waitlist = $waitlist;
    if ($waitlist == 'no' || $waitlist == 'none' || $waitlist == 'false') {
        $waitlist = false;
    }
    $place = strtolower($place);
@endphp

<div {!! $attributes->merge([
    'class' =>
        'float-left p-[10px] mb-[10px] ml-[5px] max-md:float-none max-md:w-[290px] max-md:mt-[0] max-md:mx-[auto] max-md:mb-[10px]',
]) !!}>
    <a href="{{ $link }}" class="no-underline text-[rgb(82,_48,_10)] hover:no-underline"
        style="text-decoration: none">
        <div class="rounded-[10px] bg-[url(images/yogaDefault.jpg)] bg-repeat bg-cover bg-center p-[20px] mr-[15px] mb-[10px] w-[280px] h-[220px] hover:opacity-[.8]"
            style="background-image: url({{ $image }})">
            &nbsp;
        </div>
    </a>
    <div class="leading-[1.6] p-0 w-[280px] text-[smaller]">
        <a href="{{ $link }}" class="no-underline text-[rgb(82,_48,_10)] hover:no-underline ">
        </a>
        <p>
            <a href="{{ $link }}" class="no-underline text-[rgb(82,_48,_10)] hover:no-underline"
                style="text-decoration: none">
                <b>{{ $title }}</b>
                <br />
                <i>{{ $specialist }} ~ {{ $date }}</i>
                <br />
            </a>
            {{ $description }}
            <br />
            @if ($for)
                <span class="text-[smaller]">
                    <i>{{ $for }}</i>
                </span>
            @endif
            @if ($waitlist)
                <span class="text-[smaller] text-[#f68f1d]">
                    Studio class is waitlist only
                </span>
            @endif
        </p>
        <div class="flex">
            @if ($place && str_contains($place, 'online'))
                <span class="mt-2">
                    <a href="{{ $link }}">
                        <img src="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/GreyOnline.png"
                            class="h-[1.2rem] pr-[5px]" />
                    </a>
                </span>
            @elseif($place && str_contains($place, 'studio'))
                <span class="mt-2">
                    <a href="{{ $link }}">
                        <img src="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/GreyStudio.png"
                            class="h-[1.2rem] pr-[5px]" />
                    </a>
                </span>
            @elseif($place && str_contains($place, 'onsite'))
                <span class="mt-2">
                    <a href="{{ $link }}">
                        <img src="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/GreyLocation.png"
                            class="h-[1.2rem] pr-[5px]" />
                    </a>
                </span>
            @elseif($place && str_contains($place, 'onlocation'))
                <span class="mt-2">
                    <a href="{{ $link }}">
                        <img src="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/GreyLocation.png"
                            class="h-[1.2rem] pr-[5px]" />
                    </a>
                </span>
            @endif

        </div>

    </div>
</div>
