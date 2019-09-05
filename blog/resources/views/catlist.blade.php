@extends('master')

@section('title')
Home Page | My First Page
@endsection

@section('maincontent')

    <div class="row">
       @foreach ($post as $item)
        <div class="col-md-4" style="padding: 10px;">
          <h2>{{ $item->heading }}</h2>
          <p>{{ substr($item->description, 0, 100) }}</p>
          <p><a href="{{ route('full.details', $item->id)}}">Read More </a></p>
        </div>
       @endforeach
    </div>

   

   
    </div>

    @endsection