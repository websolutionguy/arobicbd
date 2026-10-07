@extends('back.layout.app')

@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ArobicBD Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Licence</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-12">
            <div class="card table-responsive">
              <div class="card-header">
                <div style="display:flex;justify-content:space-between;align-items:center;">
                    <h3 class="card-title">Our Award</h3>
                    <a href="{{ route('award.create') }}" class="btn btn-success btn-sm">Create</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($awards as $award)
                      <tr>
                        <td>{{ $award->id }}</td>
                        <td><img style="width:50px;" src="{{ asset('images/award/'.$award->image_path) }}" /></td>
                        <td>{{ $award->title }}</td>
                        <td style="text-align: right;display: flex;justify-content: flex-end;">
                          <a href="/admin/award/{{ $award->id }}/edit" class="btn btn-warning btn-sm">Edit</a> &nbsp;
                          <form action="/admin/award/{{ $award->id }}" method="POST">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      <p>There are no award data found!</p>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection