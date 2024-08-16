<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 5 Components</title>
    @vite('resources/css/app.css')
</head>

<body class="!font-[Work_sans]">
    <div class="mx-auto md:w-[800px] max-md:w-full my-[30px]">
        
        <x-studio-profile 
            name="Vinyasa" 
            location="with Isabelle Watton"
            image_url="https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/image002.jpg"
        />

        <x-studio-timetable 
            date='Sun 28 Aug' 
            time='3:00pm' 
            remember_time='30mins' 
            source="Studio and zoom" 
        />

        <x-studio-about 
            content="Suitable for all. A flowing class that connects mind, body, movement and breath, united with relaxing  music.<br>This class will invite you to listen to your body through a mix of dynamic flows, and energising postures to nourish and challenge your body."
        />

        <x-studio-actions 
            link_find_us='#finding-the-studio' 
            link_new_studio='#new-to-studio'
            link_howto_join='#how-to-join-zoom'
        />

        <x-studio-form 
            action="/action-url" 
            onsubmit="return false;"
        >
            <x-slot name="html">
                <input type="hidden" name="timetable_id" value="43092">
            </x-slot>
            <x-slot name="header">
                <b>Unlimited classes for 30 days is £30.</b> <i class="fa-solid fa-star"></i>
                A simple subscription you can start and stop at the click of a button. This is our regular price,
                not just a special offer. Alternatively, you can pay £12 for just this class. Click 'book in' to get
                started.
            </x-slot>                
        </x-studio-form>

        {{-- Use simple syntex --}}
        {{-- <x-studio-from action="/action-url" onsubmit="return false;"/> --}}

    </div>
</body>

</html>
