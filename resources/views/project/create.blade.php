@extends('layouts.app')
@section('title','Create Page')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing Now<a class="pull-right btn-xs" href="{{url('/dashboard')}}">Go Back</a></div>

                <div class="panel-body">
                   {!!Form::open(['method'=>'POST','action'=>'ListingController@store','files'=>true])!!}
                   {{csrf_field()}}
                   <div class="form-group">
                     {{Form::label('name','Name')}}
                     {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Your Name'])}}

                   </div>

                   <div class="form-group">
                     {{Form::label('address','Address')}}
                     {{Form::text('address',null,['class'=>'form-control','placeholder'=>'Your Address'])}}

                   </div>
                   <div class="form-group">
                     {{Form::label('bio','Bio')}}
                     {{Form::textarea('bio',null,['class'=>'form-control','placeholder'=>'Your Detail here Please'])}}

                   </div>
                   <div class="form-group">
                     {{Form::label('email','Email')}}
                     {{Form::text('email',null,['class'=>'form-control','placeholder'=>'Your Email'])}}

                   </div>
                   <div class="form-group">
                     {{Form::label('phone','Phone')}}
                     {{Form::text('phone',null,['class'=>'form-control','placeholder'=>'Your phone number'])}}

                   </div>

                   <div class="form-group">
                     {{Form::label('website','Website')}}
                     {{Form::text('website',null,['class'=>'form-control','placeholder'=>'Your Website Here Plz'])}}

                   </div>

                   <div class="form-group">
                     {{Form::submit('Create',['class' => 'btn btn-primary'])}}
                   </div>

                   {!!Form::close()!!}
                </div>
            </div>
        </div>

</div>
@endsection
