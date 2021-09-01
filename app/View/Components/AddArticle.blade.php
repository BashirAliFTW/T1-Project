@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">Create Article</div>
            
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 col-md-offset-3">
                                    {!! Form::open(['route' => 'Article.store', 'method' => 'POST', 'files' => true ])!!}
                                    @csrf
                                        <div class="form-group">
                                            <p class="text-primary" ><strong>Title</strong></p>
                                            <input type="text" class="form-control" id="Title" placeholder="Title...">
                                        </div>            
                                        <div class="row form-group">
                                            <div class="col">
                                                <p class="text-primary" ><strong>Author's name</strong></p>
                                                <input type="text" class="form-control" id="name" placeholder="Name...">
                                            </div>
                                            <div class="col">
                                                <p class="text-primary" ><strong>Date</strong></p>
                                                <input type="text" class="form-control" id="Date" placeholder="Date...">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                             <p class="text-primary" ><strong>Description</strong></p>
                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Write Something ..."></textarea>
                                        </div>
                    
                                        <div class="form-group ">
                                            <label for="inputState" class="text-primary" >Category</label>
                                            <select id="inpu tState" class="form-control">
                                              <option selected>Hardware</option>
                                              <option>Gaming</option>
                                            </select>
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