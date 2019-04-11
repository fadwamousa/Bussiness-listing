@extends('layouts.app')
@section('title','Listings Page')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Bussines Listings
                </div>

                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings) > 0)
                      <ul class="list-group">
                        @foreach($listings as $listing)
                          <li class="list-group-item">
                            <a href="{{url('/listing/'.$listing->id)}}">{{$listing->name}}</a>
                          </li>



                        @endforeach
                      </ul>

                    @else

                    <p>No Listings Found</p>

                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
