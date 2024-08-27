<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel User page's Components</title>
    @vite('resources/css/app.css')
</head>

<body class="!font-[Work_sans]">
    <div class="max-md:mt-0 max-md:px-[10px] max-md:py-0 max-w-[1010px] mx-[auto] my-[30px]">

        {{-- user component aslo can takes children elements/components --}}
        <x-user  
            name="Hello Test." 
            welcome="Hope your day is good." 
            image="/images/image002.jpg"
        >
            <x-user-status classes="1" minutes="45" since="2024" />
        </x-user>

        <h2 class="text-[2rem] mt-[50px] mb-[30px] text-center text-2xl font-semibold">
            Your latest bookings
        </h2>

        {{-- shadow  div component feel like a div and support all div attributes --}}
        <x-shadow class="mb-10">

            {{-- shadow  div component can hold any components/elements/text/number etc --}}
           
            {{-- exmaple 1 with prevous component --}}
            <x-meeting-user 
                name='Vinyasa' 
                time='' 
                location='Isabelle Watton'
                image='https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/image003.jpg'
                time_reminder='60mins' 
                finished="yes"
            />

            {{-- exmaple 2 with prevous component --}}
            <x-meeting-user 
                name='Vinyasa' 
                time='' 
                location='Isabelle Watton'
                image='https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/image003.jpg'
                time_reminder='60mins' 

                borderClass="hidden"
            />
            
        </x-shadow>

        <x-attendance-info email="email@company.com" 
            passes_link='#'
            attendance_link='#'
            details_link='#' 
        />

        {{-- newslatter component accept title,class,id ete and also nested children news --}}
        
        {{-- example 1 --}}
        <x-newslatter title="You are in on...">
            <x-news 
                headline="The studio newsletter"
                sub_text="Occasional studio updates, class changes and news."
                link_text="drop out"
                link="#"
            />
            <x-news 
                headline="The happier-healthier blog"
                sub_text="A yoga thought every now and then."
                link_text="drop out"
                link="#"
            />
        </x-newslatter>

        {{-- example 2 --}}
        <x-newslatter title="You are LEFT OUT of..." class="mb-20">
            <x-news 
                headline="The what's on list"
                sub_text="Our every two months(ish) list of workshops."
                link_text="join in"
                link="#"
            />
        </x-newslatter>
        
    </div>
</body>

</html>
