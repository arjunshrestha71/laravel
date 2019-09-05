@extends('master')

@section('title')
Details | My First Page
@endsection

@section('maincontent')

    <div class="row">
       @foreach ($details as $item)
        <div class="col-md-12">
          <h2>{{ $item->heading }}</h2>
          <p>{{ $item->description }}</p>
          
        </div>
       @endforeach
    </div>

   

   
    </div>

    @endsection