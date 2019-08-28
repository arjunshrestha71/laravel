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
                    <td>{{$item->name}}t</td>
                    <td>{{$item->status}}</td>
                    <td>Edit | Delete </td>
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