@extends('admin.master')
@section('maincontent')

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
        
          <a href="{{ route('category.create') }} "><input type="button" name="add" value="Add Category" class="btn btn-sm btn-primary" style="margin-bottom: 10px;"></a>

         @include('admin.partial.message')

            <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Category</div>
          <div class="card-body">
            <div class="table-responsive">
              @if(count($cats) >= 1)
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>Status</th>                      
                    <th>Functions</th>
                  </tr>
                </thead>               
                <tbody>

              @foreach($cats as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->status}}</td>
                    <td style="text-align: center;">
                      <div class="row">
                        <div class="col-md-6">
                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-sm btn-primary ">Edit</a>

                      </div>
                      <div class="col-md-6">
                        <form onsubmit="return confirm('Do you really want to delete?');" action="{{ route('category.destroy',$item->id) }}" method="POST" >
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE" />
                      <button type="submit" class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" /></i></button>
                      </form>
                      </div>     
                      </div>
                                      


                    </td>
                  </tr>
              @endforeach                 
                  
                </tbody>
              </table>
              @else
                <div>
                  <p>No Data Found</p>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
@endsection