@extends('app.layouts.basico')

@section('titulo', 'Listagem | Filtro')

 
@section('conteudo')

<div class="col-8 offset-1 mb-5">
  <form action="/listagem/search/" class="form-control border-1" method="GET">
    @csrf
      <div class="row">

          <div class="col-md-8"> <!-- Pesquisar Nome -->
            <input type="text" class="form-control" name="nomePesquisa" id="nomePesquisa" placeholder="Pesquise um nome">
          </div>

          <div class="col-md-4 justify-content-end pt-1">
            <button type="submit" class="btn btn-sm btn-success">Pesquisar nome</button>
          </div>

      </div>
  </form>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">CPF</th>
        <th scope="col">Email</th>
        <th scope="col">Email Secundario</th>
        <th scope="col">Telefone</th>
        <th scope="col">Telefone Secundário</th>
      </tr>
    </thead>
    <tbody>

            @foreach ($lista as $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->nome}}</td>
                <td>{{$value->sobrenome}}</td>
                <td>{{$value->cpf}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->email_secundario}}</td>
                <td>{{$value->telefone}}</td>
                <td>{{$value->telefone_secundario}}</td>
                <td>
                  <form action="/listagem/update/{{$value->id}}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-warning">Editar</button>

                  </form>
                </td>
                <td>
                  <form action="/listagem/{{$value->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>

                  </form>
                </td>
            </tr>
            @endforeach

    </tbody>
  </table>

  <div>
    <a class="btn btn-primary" href='{{ route('cadastro')}}' >Novo Cadastro</a>
  </div>


@endsection