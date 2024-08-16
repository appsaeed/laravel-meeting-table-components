@props([
    'name' => 'name',
    'location' => 'location',
    'image_url' => 'https://raw.githubusercontent.com/appsaeed/laravel-meeting-table-components/main/public/images/image002.jpg'
])
<div class="w-full">
    <div class="w-[93px] h-[93px] border-[3px] border-[solid] border-[#cccccc] rounded-[50%] overflow-hidden mt-[0] mx-[auto] mb-[20px]">
        <img class="w-full h-full object-cover" src="{{ $image_url }}" alt="{{ $name }}">
    </div>
    <h1 class="text-center text-[32px] font-bold leading-[1.2] tracking-normal">{{ $name }}</h1>
    <p class="leading-[1.2] text-center mt-0">{{ $location }}</p>
</div>
