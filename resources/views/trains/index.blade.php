@extends('layouts.app')

@section('title', 'All trains')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li>
                    <h2>
                        {{ $train->stazione_di_partenza}} - {{ $train->stazione_di_arrivo}}
                    </h2>
                    <p>Partenza: {{ $train->orario_di_partenza}}</p>
                    <p>Arrivo: {{ $train->orario_di_arrivo}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection