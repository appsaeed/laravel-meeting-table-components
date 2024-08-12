<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Components</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full md:max-w-[1000px] mx-[auto] my-[30px] flex flex-col justify-center">
        <x-meeting-header 
            title='Unlimited classes for 30 days is £30'
            description='A simple subscription you can start and
            stop at the click of a button.'
            sub_title='Click a class to book in and get started.'
         />

        <h2 class="mx-[0] text-left text-2xl font-bold my-4">Sun 11 Aug</h2>
        <x-meeting-user 
            name='Vinyasa' 
            time='09:30' 
            link='#' 
            location='Isabelle Watton'
            image='/images/image002.jpg' 
            time_reminder='60mins' 
            finished=true
            tooltip='More info or book'
            studio="true" 
        />
        <x-meeting-user 
            name='Vinyasa' 
            time='09:30' 
            link='#' 
            location='Isabelle Watton'
            image='/images/image002.jpg' 
            time_reminder='60mins' 
            finished='' 
            tooltip='More info or book'
            studio="true" 
            online='true' 
            event='true' 
        />
      </div>
</body>
</html>