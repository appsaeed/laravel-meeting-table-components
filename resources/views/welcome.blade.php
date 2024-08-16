<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 5 Components</title>
    @vite('resources/css/app.css')
</head>

<body class="!font-[Work_sans]">
    <div
        class="max-w-[1000px] mx-[auto] my-[30px]  [@media_screen_and(max-width:575px)]:mt-0 [@media_screen_and(max-width:575px)]:px-[10px] [@media_screen_and(max-width:575px)]:py-0">

        <div class="pt-[40px] pb-[40px] text-center">
            
            <x-studio-profile/>

            <x-studio-timetable />

            <x-studio-about />

            <x-studio-actions/>

            <x-studio-form/>

        </div>
    </div>
</body>

</html>
