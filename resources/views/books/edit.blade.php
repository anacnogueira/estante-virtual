@extends('layouts.app')

@section('htmlheader_title')
    Livros
@stop

@section('contentheader_title')
    Livros
  @stop

@section('contentheader_description')
    Editar
@stop

@section('contentheader_breadcrumb')
    <li><a href="{{ route('admin.book.index') }}"><i class="fa fa-dashboard"></i> Livros</a></li>
    <li class="active">Editar</li>
@stop

@section('content')
<section class='content'>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                {!! Form::model($book, ['route'=>['admin.book.update', 'id' => $book->id],'method'=>'put', 'files' => true]) !!}
                @include('books.form')                        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="actions">
                        <ul>
                            <li><a href="{{ route('admin.book.index') }}" class="btn btn-warning"><i class="fa fa-list-alt"></i> Listar</a></li>                            
                        </ul>
                    </div>
                </div>
            </div>                
        </div>
    </div>      
</section>
@endsection