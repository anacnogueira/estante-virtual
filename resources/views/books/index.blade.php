@extends('layouts.app')

@section('htmlheader_title')
    Livros
@stop

@section('contentheader_title')
    Livros
    <ul class="list-inline">
        <li>
            <a href="{{ route('admin.book.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Adicionar</a>
        </li>
        <li>
            <a href="{{ route('admin.book.toBeRead') }}" class="btn btn-success btn-xs"><i class="fa fa-book" aria-hidden="true"></i> A ser lido</a>
        </li>
    </ul>
    
@stop

@section('htmlheader_css')
    <link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('scripts_js')
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('/js/booksList.js') }}"></script>
@stop
    
@section('content')

<section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Listar Livros</h3>
                    </div>
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="book" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="order" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Ordernar pelo título do livro">Título</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="order" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Ordernar pelos autor(es) do livro">Autor(es)</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="order" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Ordernar pela categoria do livro">Categoria</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="order" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Ordernar por livro lido">Lido</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $book)                                               
                                            <tr role="row" class="">
                                                <td>
                                                    {{ $book['title'] }}<br>
                                                    <div style="float:left; margin-right: 10px">
                                                        {!! Form::open(['route' => ['admin.book.destroy', $book['id']], 'method' => 'delete', 'id'=>'form'.$book['id']]) !!}
                                                        {!! Form::button('<i class="fa fa-times"></i> Excluir', ['type' => 'submit','class' => 'btn btn-danger', 'onclick'=>"deleteConfirm(event, {$book['id']})"]) !!}
                                                        {!! Form::close() !!}
                                                        &nbsp; &nbsp;
                                                    </div>
                                                    <a href="{{ route('admin.book.edit',['id' => $book['id']]) }}" class='btn btn-warning'><i class="fa fa-edit"></i> Editar</a>
                                                    &nbsp; &nbsp;
                                                    <a href="{{ route('admin.book.show',['id' => $book['id']]) }}" class ='btn btn-primary'><i class="fa fa-eye"></i> Visualizar</a>
                                                   &nbsp; &nbsp;
                                                </td>
                                                <td>
                                                    @foreach($book->authors as $author)
                                                        {{ $author->name  }}<br>
                                                    @endforeach
                                                </td>
                                                <td>{{ $book->category->name }}</td>
                                                <td>{{ $book->read == 1 ? 'Sim' : 'Não' }}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th rowspan="1" colspan="1">Título</th>
                                            <th rowspan="1" colspan="1">Autor(es)</th>
                                            <th rowspan="1" colspan="1">Categoria</th>
                                            <th rowspan="1" colspan="1">Lido</th>
                                          </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection