@extends('layouts.app')
@section('content')      
<div class="jumbotron">
    <h5 class="display-4">Aprenda, colabore!</h5>
    <span>
        <a class="btn btn-primary" href="/home/nova-pergunta" role="button">Pergunte</a>
    </span>
    <hr class="my-4">
    <p class="lead">O Ponto do Código terá como objetivo esclarecer dúvidas através de 
    um sistema de perguntas e respostas.<br />
    O site foi desenvolvido por estudantes do IFSP - Campus Campinas, 
    com a finalidade de criar um novo canal de solucionar dúvidas. 
    Faça uma nova pergunta que possivelmente sua dúvida explicada.</p>
</div>
@if(old('titulo')) 
<div class="alert alert-success"> 
    A pergunta  {{ old('titulo') }} foi adicionada com sucesso. 
</div> 
@endif
@endsection 