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
          <div class="form-group @if (array_key_exists('title', $errors)) has-error @endif">
            {!! Form::label('title', 'Título*') !!} 
            {!! Form::text('title', null, $attributes = ['class' => 'form-control']); !!}
             @if (array_key_exists('title', $errors)) <span class="help-block">{{ $errors['title']['0'] }}</span> @endif
          </div>     
          <div class="form-group">
            {!! Form::label('author_id', 'Autor(es)') !!}
            {!! Form::select('author_id[]', $authors, null, array('multiple' => true, 'class' => 'form-control')); !!}
          </div>
          <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, array('class' => 'form-control')); !!}
          </div>     
         
          <div class="form-group">
            {!! Form::label ('pages', 'Páginas') !!}
            {!! Form::text('pages', null, $attributes = ['class' => 'form-control']); !!}
          </div> 

            <div class="form-group">
            {!! Form::label ('isbn', 'ISBN') !!}
            {!! Form::text('isbn', null, $attributes = ['class' => 'form-control']); !!}
          </div> 

          <div class="form-group">
            {!! Form::label ('read', 'Lido?') !!}<br>
            <div class="radio" style="display: inline">
              <label>
                {!! Form::radio('read', 0); !!}
                Não
              </label>              
            </div>
            <div class="radio" style="display: inline">
              <label>
                {!! Form::radio('read', 1); !!}
                Sim
              </label>              
            </div>            
          </div>

          <div class="form-group">
            {!! Form::label ('type', 'Tipo') !!}<br>
            <div class="radio" style="display: inline">
              <label>
                {!! Form::radio('type', 'paper'); !!}
                Papel
              </label>              
            </div>
            <div class="radio" style="display: inline">
              <label>
                {!! Form::radio('type', 'ebook'); !!}
                E-book
              </label>              
            </div>            
          </div>

           <div class="form-group">
             {!! Form::label('summary', 'Resumo') !!} 
            {!! Form::textarea('summary', null, $attributes = ['class' => 'form-control']); !!}
          </div>   

          <div class="form-group">
             {!! Form::label('images', 'Imagens') !!} 
            
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