@extends('layouts.app')

@section('htmlheader_title')
    Autores
@stop

@section('contentheader_title')
    Autores
  @stop

@section('contentheader_description')
    Visualizar
@stop

@section('contentheader_breadcrumb')
    <li><a href="{{ route('admin.author.index') }}"><i class="fa fa-dashboard"></i> Autores</a></li>
    <li class="active">Visualizar</li>
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
                                        <dt>Nome: </dt>
                                        <dd>{{ $author->name }}&nbsp;</dd>  
                                        <dt>Descrição: </dt>
                                        <dd>{{ $author->description }}&nbsp;</dd>
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
                            <li><a href="{{ route('admin.author.index') }}" class="btn btn-warning"><i class="fa fa-list-alt"></i> Listar</a></li>                            
                        </ul>
                    </div>
                </div>
            </div>                
        </div>
    </div>      
</section>
@endsection