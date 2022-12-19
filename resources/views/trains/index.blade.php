@extends('layouts.app')

@section('title', 'All trains')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->stazione_di_partenza}}, {{ $train->stazione_di_arrivo}}, {{ $train->orario_di_partenza}}, {{ $train->orario_di_arrivo}}</li>
            @endforeach
        </ul>
    </div>
@endsection