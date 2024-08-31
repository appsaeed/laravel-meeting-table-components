<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Event page's Components</title>
    @vite('resources/css/app.css')
</head>

<body class="!font-[Work_sans]">
    <div class="max-w-[1010px] mx-[auto] my-[30px] max-md:mt-0 max-md:px-[10px] max-md:py-0">

        {{-- event header parameters: title , sub_title, link --}}
        <x-event-header link="#" />

        {{-- event month parameters: name is required and others can defautl as div --}}
        <x-event-month name="September" />

        {{-- event parameters: title, image, description, date, link, waitlist, specialist, for, location --}}
        <x-event 
            title="Teacher Training (TT20)"
            description="A course for those that would love to teach yoga or just love living yoga and want to know more."
            specialist="Ian Davis" 
            date="Fri 06 Sep" 
            link="#" 
            image="/images/image001.jpg"
            waitlist="yes"
        />

        {{-- example with onlocation or onsite  --}}
        <x-event 
            title="Functional Breathing for Asthma Workshop"
            description="By changing the way we breathe, we can influence many aspects of our health and well-being."
            specialist="Vicki McCordall" 
            date="Sat 07 Sep" 
            link="#" 
            image="/images/image003.jpg" 
            place="onLocation"
        />
        {{-- example for teachers or students  --}}
        <x-event 
            title="Yoga for Perimenopause and the Menopause: a 6 week course"
            description="Designed to help you thrive through your perimenopause and beyond into the Second Spring of life."
            specialist="Dr Celia Swan" 
            date="Mon 07 Sep" 
            link="#" 
            image="/images/image001.jpg"
            for="For teachers (and interested students)."                
        />

        {{-- event calendar link parameters: page_link , param --}}
        <x-event-calendar />
    </div>
</body>

</html>
