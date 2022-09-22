<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>treni</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <th>Azienda:</th>
            <th>Stazione di partenza:</th>
            <th>Stazione di arrivo:</th>
            <th>Orario di partenza:</th>
            <th>Orario di arrivo:</th>
            <th>Codice Treno:</th>
            <th>Numero Carrozze</th>
            <th>Stato Treno:</th>
        </thead>
        <tbody>
            @forelse ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->stato_treno }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Nessun Treno</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
