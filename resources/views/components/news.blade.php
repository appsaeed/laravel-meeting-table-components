@props([
    'headline' => 'The studio newsletter',
    'sub_text' => 'Occasional studio updates, class changes and news.',
    'link' => '#',
    'link_text' => 'drop out',
])
<p {!! $attributes->merge(['class' => '']) !!}>
    {{ $headline }} &nbsp;
    <span class="text-[small]">
        [<a class="text-[rgb(244,_136,_71)]" href="{{ $link }}">{{ $link_text }}</a>]
    </span>
    <br />
    <span class="text-[small]"><i>{{ $sub_text }}</i></span>
</p>
<p>&nbsp;</p>
