@extends('layouts.app')
@section('title','Home Page')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                  <span class="pull-right">
                    <a href="{{url('/listing/create')}}" class="btn btn-success btn-xs">
                      Create Listing
                    </a>
                    </span>
                </div>

                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings) > 0)
                    <table class="table table-striped">

                      <tr>
                        <th>Company</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                   @foreach($listings as $listing)
                      <tr>
                        <td>{{$listing->name}}</td>
                        <td>
                          <a href="{{url('/listing/'.$listing->id.'/edit')}}"
                               class="btn btn-info">Edit
                          </a>
                        </td>
                        <td>
                          {!!Form::open(['method'=>'POST','action'=>['ListingController@destroy',$listing->id]])!!}
                                   {{method_field('DELETE')}}
                                   {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                          {!!Form::close()!!}

                        </td>


                      </tr>
                   @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
