@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <h1>Main Page</h1>
    <img src="/img/banner.jpg" alt="Banner">

    <!-- Aqui eu estou utilizando o Blade do Laravel para aplicar condicionais -->
    @if (10 > 15)
        <p>The condition is TRUE.</p>
    @endif

    <!-- Aqui eu estou trazendo o valor de uma variável declarada na rota dessa view -->
    <p>Real Name: {{$name}}</p>


    <!-- Aqui estou aplicando condicionais com a variável que foi passada pela rota -->
    <br>
    <p>Testing if the name sent was "Pedro"...</p>
    @if ($name == "Pedro")
        <p>The name is Pedro</p>
    @elseif ($name == "Kauan")
        <p>The name is {{$name}}, he's {{$age}} years old and works as a {{$occupation}}.</p>
    @else 
        <p>The name is not Pedro</p>
    @endif

    <!-- Aqui estou testando um laço de repetição para o array declarado na rota da view -->
    @for ($i = 0; $i < count($arr); $i++)
        @if ($i == 2)
            <p>WARNING: INDEX EQUALS TO [2]!!</p>
        @endif
        <p>The value for index [{{$i}}] is: {{$arr[$i]}}</p>
    @endfor
    <br>
    @php
        // Aqui estou declarando uma variável PHP dentro da view
        $name = "Pedro";
        echo "<p>The name declared into the view is: $name</p>";
    @endphp

    <!-- Aqui estou utilizando um comentário do Blade, que não aparece no HTML final -->
    {{-- This is a Blade Comment --}}

    @foreach ($names as $name)
        <!-- Aqui estou utilizando uma variável especial '$loop' do Blade para pegar o índice atual do array -->
        <p>The name in array at index [{{ $loop -> index }}] is: {{ $name }}</p>
    @endforeach
@endsection