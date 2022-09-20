<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>treni</title>
</head>

<body>
    <ul>
        @forelse ($trains as $train)
            <h1>{{ $train->azienda }}</h1>
            <ul>
                <li>{{ $train->azienda }}</li>
                <li>{{ $train->stazione_partenza }}</li>
                <li>{{ $train->stazione_arrivo }}</li>
                <li>{{ $train->orario_partenza }}</li>
                <li>{{ $train->orario_arrivo }}</li>
                <li>{{ $train->codice_treno }}</li>
                <li>{{ $train->numero_carrozze }}</li>
                <li>{{ $train->stato_treno }}</li>
            </ul>

        @empty
            <li>Nessun Treno</li>
        @endforelse
    </ul>
</body>

</html>
