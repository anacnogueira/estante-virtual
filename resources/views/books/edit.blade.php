@extends('layouts.app')

@section('htmlheader_title')
    Autores
@stop

@section('contentheader_title')
    Autores
  @stop

@section('contentheader_description')
    Adicionar
@stop

@section('contentheader_breadcrumb')
    <li><a href="{{ route('admin.author.index') }}"><i class="fa fa-dashboard"></i> Autores</a></li>
    <li class="active">Editar</li>
@stop

@section('content')
<section class='content'>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                {!! Form::model($author, ['route'=>['admin.author.update', 'id' => $author->id],'method'=>'put', 'files' => true]) !!}
                @include('authors.form')                        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="actions">
                        <ul>
                            <li><a href="{{ route('admin.author.index') }}" class="btn btn-warning"><i class="fa fa-list-alt"></i> Listar</a></li>                            
                        </ul>
                    </div>
                </div>
            </div>                
        </div>
    </div>      
</section>
@endsection