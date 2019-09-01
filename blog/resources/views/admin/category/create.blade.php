@extends('admin.master')
@section('maincontent')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Category
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
      <form method="post" action="{{ route('category.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Category Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Category Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="status">Status:</label>
                <select name="status">
                   <option value=1>Active</option>
                   <option value=0>Disable</option>
                </select>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Add</button>
          <a href="{{ route('category.index') }}"><input type="button" name="" value="Cancel" class="btn btn-danger btn-sm"></a>
      </form>
  </div>
</div>



@endsection