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


    {{-- COMPONENTS --}}
    {{-- <x-card /> --}}
    <x-button />

    @php
        $color = 'cyan';
        $bgColor = 'gray';
    @endphp

    <x-card :$color :$bgColor lang="bn" class="card-rounded"> {{-- works if the variable name is same --}}
        {{-- <x-card :color="$color" :bgColor="$bgColor"> --}} {{-- similar as before, works --}}
        {{-- <x-card color="red" bgColor="black"> --}} {{-- similar as before, works --}}
        <x-slot:title class="card-header-blue">Car title 01</x-slot:title>
        Card SLOT Content 01
        <x-slot:footer>Car footer 01</x-slot:footer>
    </x-card>

    <x-search-form />

    <x-test-component>something in test</x-test-component> {{-- inline component, not very common  --}}
 

</body>

<script>
    const hobbies = {{ Illuminate\Support\Js::from($hobbies) }};
</script>

</html>
