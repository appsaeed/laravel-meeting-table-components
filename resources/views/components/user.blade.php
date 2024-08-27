@props([
    'name'              => 'Test',
    'image'             => '',
    'welcome'           => 'Welcome back to your page.'
])
<p>&nbsp;</p>
<div  {!! $attributes->merge(['class' => 'pt-[40px] pb-10']) !!}>
    <div class="pb-[22px]">
        <div class="w-[100px] h-[100px] border-[3px] border-[solid] border-[#cccccc] rounded-[50%] overflow-hidden mt-[0] mx-[auto] mb-[20px]">
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="profile" />
        </div>
        <h1 class="text-center leading-[1.2] block text-[2em] mt-[0.67em] mb-[0.67em] ml-0 mr-0 font-bold">
            {{ $name }}
        </h1>
        <p class="leading-[1.2] text-center">{{ $welcome }}</p>
    </div>
    {{ $slot }}
</div>
