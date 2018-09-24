@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ $perguntas->titulo }} </h3>
    </div>
    <div class="card-body">
        <ul> 
            <li>
                <p> {{ $perguntas->descricao }} </p>
            </li> 
        </ul>
    </div>
</div>
<hr>
<div class="card">
    <div class="card-header">
        <h3>Comentarios</h3> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        @foreach($respostas as $r)
            <div class="list-group">
                <p> {{ $r->resposta }} </p>
            </div>
            <hr>
        @endforeach
    </div>
</div>
<br />
<h3>Sua resposta</h3>   
    <form action="/home/resposta/" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label></label>  
            <input type="hidden" name="id" value="{{ $perguntas->id }}" />
            <textarea name="resposta" class="form-control"></textarea>
        </div> 
        <button type="submit" class="btn btn-primary btn-block">Publicar sua resposta</button> 
    </form>

<br /><br /><br />
@endsection