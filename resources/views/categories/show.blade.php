@extends('layouts.app')

@section('htmlheader_title')
    Categorias
@stop

@section('contentheader_title')
    Categorias
  @stop

@section('contentheader_description')
    Visualizar
@stop

@section('contentheader_breadcrumb')
    <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-dashboard"></i> Categoria</a></li>
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
                                        <dd>{{ $category->name }}&nbsp;</dd>  
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
                            <li><a href="{{ route('admin.category.index') }}" class="btn btn-warning"><i class="fa fa-list-alt"></i> Listar</a></li>                            
                        </ul>
                    </div>
                </div>
            </div>                
        </div>
    </div>      
</section>
@endsection