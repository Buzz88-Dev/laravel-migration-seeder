<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ $data['pagetitle'] }}</title>
</head>
<body>
    <div>
        <h4>Biglietti Treno</h4>
        <div class="container">
                @foreach ($Trains as $treno)
                    <div class="biglietto">
                    <p>{{ $treno['Azienda'] }}</p>
                    <p>Partenza: {{ $treno['Stazione_di_partenza'] }}</p>
                    <p>Arrivo: {{ $treno['Stazione_di_arrivo'] }}</p>
                    <p>Orario di Partenza: {{ $treno['Orario_di_partenza'] }}</p>
                    <p>Orario di Arrivo: {{ $treno['Orario_di_arrivo'] }}</p>
                    </div>
            @endforeach
        </div>
    </div>


</body>
</html>
