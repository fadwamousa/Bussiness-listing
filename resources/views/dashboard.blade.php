@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings) > 0)
                    <table class="table table-striped">

                      <tr>
                        <th>Company</th>

                      </tr>
                   @foreach($listings as $listing)
                      <tr>
                        <td>{{$listing->name}}</td>

                      </tr>
                   @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
