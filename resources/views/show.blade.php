@extends('layouts.app')
@section('title','One Page')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  {{$listing->name}}
                  <a href="{{url('/listing')}}" class=" btn btn-primary pull-right btn-xs">Go Back</a>
                </div>

                <div class="panel-body">


                      <ul class="list-group">

                          <li class="list-group-item">
                           Address ::  {{$listing->address}}
                          </li>
                          <li class="list-group-item">
                            Website::  {{$listing->website}}
                          </li>
                          <li class="list-group-item">
                            Phone::   {{$listing->phone}}
                          </li>
                          <li class="list-group-item">
                            Email ::  {{$listing->email}}
                          </li>

                      </ul>

                      <hr/>
                      <div class="well">

                             Detail ::  {{$listing->bio}}

                      </div>


                </div>
            </div>
        </div>
    </div>

@endsection
