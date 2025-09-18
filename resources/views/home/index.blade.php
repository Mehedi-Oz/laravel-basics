<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <h4>HELLO WORLD FROM HOME</h4>

    <p>My name is {{ $name }} {{ $surname }}</p>

    <p> Year : {{ $year }}</p>

    <p>{{ strtoupper($name . ' ' . $surname) }}</p>

    <p>{{ Illuminate\Foundation\Application::VERSION }}</p>

    <p>{{ PHP_VERSION }}</p>

    <p>{!! $job !!}</p>

    <p>{{ Illuminate\Support\Js::from($hobbies) }}</p>

    <!-- This is a html comment. It is visible in browser -->

    {{-- This is a blade comment. It is not visible in browser --}}

    @if (true)
        This will be displayed
    @endif

    <div>
        @foreach ($hobbies as $hobby)
            {{ $loop->iteration }}
            {{ $hobby }}
        @endforeach
    </div>

    <div>
        @foreach ($hobbies as $hobby)
            @foreach ($hobbies as $hobby)
                Child: {{ $loop->depth }}
                Parent: {{ $loop->parent->depth }}
            @endforeach
        @endforeach
    </div>

    <div>
        @foreach ($hobbies as $hobby)
            {{-- {{ dd($loop) }} --}}
        @endforeach
    </div>


    <div @class(['my-css-class', 'dhaka' => $country === 'bn']) @style(['color : cyan', 'background:green' => $country === 'bn'])>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum laboriosam impedit nobis fugit nostrum facere
            sunt, eveniet voluptas pariatur ab nisi eius modi exercitationem officiis temporibus similique. Illum
            officiis laudantium quae ut placeat eum cumque cupiditate recusandae quibusdam facilis quia commodi, totam
            consectetur, voluptas alias aliquid in cum ab est.</p>
    </div>

    <div>
        @include('shared.button', ['color' => 'gray', 'text' => 'weird button'])
    </div>

    @php
        $cars = [1, 2, 3, 4, 5, 6];
    @endphp

    <div>
        @foreach ($cars as $car)
            @include('car.view', ['car' => $car])
        @endforeach
    </div>

    <div>
        @each('car.view', $cars, 'car', 'car.empty')
    </div>

    @php

    @endphp

    {{-- component --}}
    {{-- Anonymouse Component --}}
    {{-- <x-card>
        <x-slot name="title">This is Car Title</x-slot>
        <x-slot name="footer">This is Car Footer</x-slot>
    </x-card> --}}

    <x-card>
        <x-slot:title>This is Car Title</x-slot:title>
        <x-slot:footer>This is Car Footer</x-slot:footer>
    </x-card>

</body>

<script>
    const hobbies = {{ Illuminate\Support\Js::from($hobbies) }};
</script>

</html>
