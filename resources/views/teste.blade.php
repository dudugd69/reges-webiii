@php
    $name = "Lucas";
    $age = 20;
    $height = 1.80;
    $isStudent = true;
    $colors = ['azul', 'verde', 'vermelho'];
    $person = [
        'name' => 'Lucas',
        'age' => 20,
        'height' => 1.80,
        'isStudent' => true,
    ];
@endphp

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teste</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

        {{-- Condicionais --}}
        @if($age >= 18)
            <p>Maior de Idade</p>
        @elseif($age === 17)
            <p>Tem 17 anos</p>
        @else
            <p>Menor de Idade</p>
        @endif

        {{-- Laços de Repetição --}}
        @for($i = 0; $i <= 10; $i++)
            <p>O número é: {{ $i }}</p>
        @endfor

        @php
            $counter = 0;
        @endphp
        @while($counter <= 10)
            <p>O número é: {{ $counter }}</p>
            @php
                $counter++;
            @endphp
        @endwhile

        @foreach($colors as $color)
            <p>Cor: {{ $color }}</p>
        @endforeach

        @foreach($person as $key => $value)
            <p>{{ $key }}: {{ $value }}</p>
        @endforeach


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
