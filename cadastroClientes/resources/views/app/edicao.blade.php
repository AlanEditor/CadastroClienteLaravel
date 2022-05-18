@extends('app.layouts.basico')

@section('titulo', 'Editar Cadastro')

 
@section('conteudo')


<div class="container mt-5 p-5 border border-3 rounded-3">

    <form class="row g-3" action="{{'/listagem/update/'.$registro->id}}" method="POST"> <!-- Form -->
        
        @csrf
        @method('PUT')
        <div class="col-md-6"> <!-- Nome -->
            <label class="form-label">Nome*</label>
            <input type="nome" class="form-control" name="nome" value="{{$registro->nome}}" id="nome" >
            
            <p id="nomeErro" class="text-danger"> {{$errors->has('nome') ? $errors->first('nome') : ' '}} </p>
        </div>

        <div class="col-md-6"> <!-- Sobrenome -->
            <label class="form-label">Sobrenome*</label>
            <input type="nome" class="form-control" name="sobrenome" value="{{$registro->sobrenome}}" id="sobrenome">

           <p id="sobrenomeErro" class="text-danger"> {{$errors->has('sobrenome') ? $errors->first('sobrenome') : ' '}} </p>
        </div>

        <div class="col-md-4"> <!-- Email -->
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{$registro->email}}" id="email">

           <p id="" class="text-danger"> {{$errors->has('email') ? $errors->first('email') : ' '}} </p>
        </div>

        <div class="col-md-4"> <!-- Email Secundario -->
            <label class="form-label">Email Secundario</label>
            <input type="email" class="form-control" name="email_secundario" value="{{$registro->email_secundario}}" id="email_secundario">

           <p class="text-danger"> {{$errors->has('email_secundario') ? $errors->first('email_secundario') : ' '}} </p>
        </div>

        <div class="col-4 "> <!-- CPF -->
            <label class="form-label">CPF</label>
            <input type="text" maxlength="14" minlength="11" class="form-control" name="cpf" placeholder="000.000.000-00" value="{{$registro->cpf}}" id="cpf">

           <p id="cpfErro" class="text-danger"> {{$errors->has('cpf') ? $errors->first('cpf') : ' '}} </p>
        </div>

        <div class="col-4 "> <!-- Telefone -->
            <label class="form-label">Telefone*</label>
            <input type="text" maxlength="11" minlength="11" class="form-control" name="telefone" placeholder="(XX) 90000-0000" value="{{$registro->telefone}}" id="telefone">

           <p id="telefoneErro" class="text-danger"> {{$errors->has('telefone') ? $errors->first('telefone') : ' '}} </p>
        </div>

        <div class="col-4 "> <!-- Telefone Secundario-->
            <label class="form-label">Telefone Secundario</label>
            <input type="text" maxlength="11"  class="form-control" name="telefone_secundario" placeholder="(XX) 90000-0000" value="{{$registro->telefone_secundario}}" id="telefone_secundario">

           <p id="telefone_secundarioErro" class="text-danger"> {{$errors->has('telefone_secundario') ? $errors->first('telefone_secundario') : ' '}} </p>
        </div>

        <p>* Obrigatórios</p>

        <div class="col-2">
            <button id="botaoCadastrar" type="submit" class="btn btn-success">Confirmar</button>
        </div>

        <div class="col-2">
            <a class="btn btn-secondary" href='{{ route('listagem')}}' >Retornar</a>
        </div>
        
  </form>

 



  @endsection