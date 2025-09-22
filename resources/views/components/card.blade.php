@props(['color' => 'yellow', 'bgColor' => 'white'])

{{-- {{ dump($attributes) }} --}}

<div {{ $attributes->class("card card-text-$color card-bg-$bgColor")->merge(['lang' => 'ar']) }}>
    <div {{ $title->attributes->class('card-header') }}>{{ $title }}</div>

    {{-- <div {{ $title->attributes->merge(['class' => 'card-header']) }}>{{ $title }}</div> --}} {{-- same as before, outputs same things --}}

    {{-- 
        - merge() helps override or add multiple attributes.
        - class() is a shortcut for just managing the class attribute. 
    --}}

    @if ($slot->isEmpty())
        <p>Please provide some content</p>
    @else
        {{ $slot }}
    @endif

    <div class="card-footer">{{ $footer }}</div>
</div>





{{-- 

//component slot

A component slot is a placeholder where you can insert custom content when you use the component.

It allows you to pass different pieces of content into a pre-defined sections of a component making the component
flexible and reusable.

TYPES OF SLOTS
1. DEFAULT SLOTS
2. NAMED SLOTS



--}}
