@extends('layouts.app')

@section('htmlheader_title')
    Categorias
@stop

@section('contentheader_title')
    Categorias
  @stop

@section('contentheader_description')
    Editar
@stop

@section('contentheader_breadcrumb')
    <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-dashboard"></i> Categorias</a></li>
    <li class="active">Editar</li>
@stop

@section('content')
<section class='content'>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                {!! Form::model($category, ['route'=>['admin.category.update', 'id' => $category->id],'method'=>'put']) !!}
                @include('categories.form')                        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="actions">
                        <ul>
                            <li><a href="{{ route('admin.category.index') }}" class="btn btn-warning"><i class="fa fa-list-alt"></i> Listar</a></li>                            
                        </ul>
                    </div>
                </div>
            </div>                
        </div>
    </div>      
</section>
@endsection