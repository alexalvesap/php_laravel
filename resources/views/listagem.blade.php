@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Todas as perguntas</h2>
    </div>
</div>
<hr>
@foreach($perguntas as $p)
    <div class="card">
        <h4>
        <div class="card-header">
            <a href="/home/pergunta/{{$p->id}}">
                    {{ $p->titulo }}
            </a>
        </div>
        </h4>
        <div class="card-body">
            <p> {{ $p->descricao }} </p>
        </div>
    </div>
    <hr>
@endforeach
@endsection
