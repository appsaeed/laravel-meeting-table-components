@props([
    'title' => 'Unlimited classes for 30 days is £30',
    'description' => 'A simple subscription you can start and
            stop at the click of a button.',
    'sub_title' => 'Click a class to book in and get started.',
])
<div
    class="shadow-md md:mx-[67px] my-[30px] rounded-[15px] content-[''] table clear-both sm:ml-0 sm:mr-0">
    <div class="float-left m-[10px] w-[60px] h-[60px] bg-[url(images/yogaDefault.jpg)] bg-cover bg-center rounded-[50%] border-[3px] border-[solid] border-[#F0F0F0]"
        style="border: none; background-image: url('images/nOrange.jpg')"></div>
    <div
        class="float-left leading-[1.4] p-[10px] text-left text-[1rem] w-[700px]s md:w-[600px] sm:w-[unset]">
        <p class="text-[smaller]">
            <b>{{ $title }}</b>
            <br />
            {{ $description }}
            <br />
            <i>{{ $sub_title }}</i>
        </p>
    </div>
</div>
