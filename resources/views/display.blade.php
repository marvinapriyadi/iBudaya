@extends('layouts.app')

@section('content')
    <h1>Uploaded Files</h1>
    <div class="row text-center">

        @foreach ($products as $item)
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                  <h4 class="card-title">{{$item->name}}</h4>
                  <p class="card-text">No Description</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
              </div>
            </div>
        @endforeach 

    </div>
@endsection