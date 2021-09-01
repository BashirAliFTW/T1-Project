@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">Create Article</div>
            
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 col-md-offset-3">
                                    {!! Form::open(['route' => 'Article.store', 'method' => 'POST', 'files' => false])!!}
                                    @csrf
                                        <div class="form-group">
                                            <p class="text-primary" ><strong>Title</strong></p>
                                            {{ Form::text('title',null, array('class' => 'form-control')) }}
                                        </div>            
                                        <div class="row form-group">
                                            <div class="col">
                                                <p class="text-primary" ><strong>Author's name</strong></p>
                                                {{ Form::text('name',null, array('class' => 'form-control') ) }}
                                            </div>
                                            <div class="col">
                                                <p class="text-primary" ><strong>Email</strong></p>
                                                {{ Form::email('email','example@gmail.com', array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                             <p class="text-primary" ><strong>Content</strong></p>
                                             {{ Form::textarea('content',null, array('class' => 'form-control')) }}
                                        </div>
                    
                                        <div class="form-group ">
                                            <label for="inputState" class="text-primary" >Category</label>
                                            {{ Form::select('tag', ['Computers', 'Mobile' , 'Hardware' ] , array('class' => 'form-control')) }}
                                            
                                        </div>
                                    <div class="form-group">
                                    {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </div>
@endsection