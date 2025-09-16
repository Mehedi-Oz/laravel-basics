<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alert Key</title>
</head>

<body>
    @include('challenge.alert', [
        'color' => 'purple',
        'message' => 'This is a long message!',
    ])

    @include('challenge.alert', [
        'color' => 'Grey',
        'message' => 'Noice!',
    ])
</body>

</html>
