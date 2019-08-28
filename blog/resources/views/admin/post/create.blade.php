@extends('admin.master')
@section('maincontent')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('post.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Categories:</label>
             <select class="form-control" name="categories_id">
                @foreach ($categories as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
             </select>
          </div>
          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="keyword">Keyword:</label>
              <input type="text" class="form-control" name="keyword"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <textarea name="description" class="form-control">
                
              </textarea>
              
          </div>
          <div class="form-group">
              <label for="heading">Heading:</label>
              <input type="text" class="form-control" name="heading"/>
          </div>
          <div class="form-group">
              <label for="details">Details:</label>
              <input type="text" class="form-control" name="details"/>
          </div>
          <div class="form-group">

          <div class="form-group">
              <label for="status">Status:</label>
                <select name="status">
                   <option value=1>Active</option>
                   <option value=0>Disable</option>
                </select>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
         <a href="/post"><input type="button" name="cancel" value="Cancel" class="btn btn-danger"></a>
      </form>
  </div>
</div>



@endsection