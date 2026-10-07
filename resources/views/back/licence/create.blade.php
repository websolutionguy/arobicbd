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
              <li class="breadcrumb-item active">Add Licence</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card table-responsive">
              <div class="card-header">
                <div style="display:flex;justify-content:space-between;align-items:center;">
                    <h3 class="card-title">Add Licence</h3>
                    <a href="{{ route('licence.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ route('licence.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Title</label>
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control @error('title') is-invalid @enderror" 
                            id="title"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('title') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Upload File</label>
                        <input 
                            type="file" 
                            name="licence_image" 
                            class="form-control @error('licence_image') is-invalid @enderror" 
                            id="licence_image"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('licence_image') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
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