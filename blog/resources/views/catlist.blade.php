@extends('master')

@section('title')
Home Page | My First Page
@endsection

@section('maincontent')

    <div class="row">
       @foreach ($catlist as $item)
        <div class="col-md-4">
          <h2>{{ $item->heading }}</h2>
          <p>{{ $item->description }}</p>
        </div>
       @endforeach
    </div>

   

   
    </div>

    @endsection