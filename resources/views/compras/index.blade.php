@extends('app')

@section('content')
    
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h2>Processos de Compras</h2>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary" href="/compras/create" title="Criar Novo">Cadastrar Novo Processo</a>
            </div>
        </div>
        <table class="table">
              <thead>
                <tr>
                  <th scope="col">Data de Protocolo na ADM</th>
                  <th scope="col">Documento</th>
                  <th scope="col">Origem</th>
                  <th scope="col">Objeto</th>
                  <th scope="col">Status</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($compras as $compra)
                <tr>
                    <td>{{date( 'd/m/Y' , strtotime($compra->data_protocolo))}}</td>
                    <td>{{$compra->tipoDocumento->nome}} nº {{$compra->numero}}</td>
                    <td>{{$compra->localOrigem->sigla}}</td>
                    <td>{{str_limit($compra->objeto, $limit = 30, $end = '...')}}</td>
                    <td>{{$compra->statusProcesso->nome}}</td>
                    <td>
                        <a class="btn-sm btn-success" href="compras/{{$compra->id}}/edit" title="Editar"><i class="far fa-edit"></i></a>
                        <a class="btn-sm btn-danger" href="compras/{{$compra->id}}/destroy" title="Excluir"><i class="far fa-trash-alt"></i></a>
                        <a class="btn-sm btn-info" href="#" title="Visualizar"><i class="fas fa-external-link-alt"></i></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    
@endsection