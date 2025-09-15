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

</body>

<script>
    const hobbies = {{ Illuminate\Support\Js::from($hobbies) }};
</script>

</html>
