@extends('layouts.app')

@section('htmlheader_title')
    Categorias
@stop

@section('contentheader_title')
    Categorias
     <a href="{{ route('admin.category.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Adicionar</a>
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
    <script src="{{ asset('/js/categoriesList.js') }}"></script>
@stop
    
@section('content')

<section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Listar Categorias</h3>
                    </div>
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="category" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="order" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Ordernar pelo nome da categoria">Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)                                               
                                            <tr role="row" class="">
                                                <td>
                                                    {{ $category['name'] }}<br>
                                                    <div style="float:left; margin-right: 10px">
                                                        {!! Form::open(['route' => ['admin.category.destroy', $category['id']], 'method' => 'delete', 'id'=>'form'.$category['id']]) !!}
                                                        {!! Form::button('<i class="fa fa-times"></i> Excluir', ['type' => 'submit','class' => 'btn btn-danger', 'onclick'=>"deleteConfirm(event, {$category['id']})"]) !!}
                                                        {!! Form::close() !!}
                                                        &nbsp; &nbsp;
                                                    </div>
                                                    <a href="{{ route('admin.category.edit',['id' => $category['id']]) }}" class='btn btn-warning'><i class="fa fa-edit"></i> Editar</a>
                                                    &nbsp; &nbsp;
                                                    <a href="{{ route('admin.category.show',['id' => $category['id']]) }}" class ='btn btn-primary'><i class="fa fa-eye"></i> Visualizar</a>
                                                   &nbsp; &nbsp;
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th rowspan="1" colspan="1">Nome</th>
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