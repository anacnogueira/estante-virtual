<div class="col-md-12">
  <div class="box box-danger">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          @php
            $errors = $errors->messages();
            if(isset($errors['message'])){
              foreach ($errors['message'] as $key => $value) {                
                if(strpos(trim($key),"messages") !== false){
                  $errors = $value;
                }               
              }              
            }
          @endphp

          
        </div>
      </div>

       <div class="row">
         <div class="col-md-12">
          <p>Os campos com * são obrigatórios</p>
          <div class="form-group @if (array_key_exists('name', $errors)) has-error @endif">
            {!! Form::label('name', 'Nome*') !!} 
            {!! Form::text('name', null, $attributes = ['class' => 'form-control']); !!}
             @if (array_key_exists('name', $errors)) <span class="help-block">{{ $errors['name']['0'] }}</span> @endif
          </div>          
          <div class="form-group">
             {!! Form::label('description', 'Descrição') !!} 
            {!! Form::textarea('description', null, $attributes = ['class' => 'form-control']); !!}
          </div>                   
        </div>
    </div>
  </div>
  <div class="box-footer">
  	<a href="{{ route('admin.author.index')}}" class="btn btn-warning"><i class="fa fa-times"></i> Cancelar</a>
    &nbsp;&nbsp;
    {!! Form::button('<i class="fa fa-check"></i> Salvar', ['type' => 'submit','class' => 'btn btn-success']) !!}
  </div>  
 </div>
</div>     
{!! Form::close() !!}