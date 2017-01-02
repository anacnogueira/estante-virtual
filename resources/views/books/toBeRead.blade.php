@extends('layouts.app')

@section('htmlheader_title')
    Livros
@stop

@section('contentheader_title')
    Livros
  @stop

@section('contentheader_description')
    A ser lido
@stop

@section('contentheader_breadcrumb')
    <li><a href="{{ route('admin.book.index') }}"><i class="fa fa-dashboard"></i> Livros</a></li>
    <li class="active">A ser lido</li>
@stop

@section('content')
<section class='content'>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
               <div class="col-md-12">
                   <div class="box box-danger">
                       <div class="box-body">
                           <div class="row">
                                <div class="col-md-12">
                                   <dl>
                                        <dt>Título: </dt>
                                        <dd>{{ $book->title }}&nbsp;</dd>  
                                        <dt>Autores: </dt>
                                        <dd>
                                          @foreach($book->authors as $author)
                                            {{ $author->name  }}<br>
                                          @endforeach
                                        </dd>
                                        <dt>Categoria</dt>
                                        <dd>{{ $book->category->name }}&nbsp;</dd>
                                        <dt>Páginas</dt>
                                        <dd>{{ $book->pages }}&nbsp;</dd>
                                        <dt>ISBN</dt>
                                        <dd>{{ $book->isbn }}&nbsp;</dd>
                                        <dt>Lido?</dt>
                                        <dd>{{ $book->read == 1 ? 'Sim' : 'Não' }}&nbsp;</dd>
                                        <dt>Tipo</dt>
                                        <dd>{{ $book->type == 'paper' ? 'Papel' : 'E-book' }}&nbsp;</dd>
                                        <dt>Resumo</dt>
                                        <dd>{{ $book->summary }} &nbsp;</dd>
                                        <dt>Imagens</dt>
                                        <dd>&nbsp;</dd>  
                                    </dl>        
                                </div>
                            </div>    
                       </div>
                   </div>
               </div>            
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