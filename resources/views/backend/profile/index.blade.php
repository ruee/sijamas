@extends('backend.layouts.layout')
@section('content')

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ trinata::titleActionForm() }}</h3>
    </div>
        <div id="content_body">
            
            <div class = 'row'>

                <div class = 'col-md-6'>
                    @include('backend.common.errors')
                    @include('backend.common.sweet_flashes')

                     {!! Form::model($model) !!} 
                        
                      <div class="form-group">
                        <label>Username</label>
                        {!! Form::text('username' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Name</label>
                        {!! Form::text('name' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        {!! Form::text('email' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Gender</label>
                        {!! Form::select('gender' , ['pria' => 'Pria','wanita'=>'Wanita'] , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        {!! Form::textarea('address' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Phone</label>
                        {!! Form::text('phone' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        {!! Form::password('password',['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Verify Password</label>
                        {!! Form::password('verify_password',['class' => 'form-control']) !!}
                      </div>
                      
                      <button type="submit" class="btn btn-primary">{{ !empty($model->id) ? 'Update' : 'Save' }}</button>
                    
                    {!! Form::close() !!}

                </div>

            </div>

        </div>
    </div>
@endsection