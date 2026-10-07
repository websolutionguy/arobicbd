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
              <li class="breadcrumb-item active">Create Client</li>
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
                    <h3 class="card-title">Create Client</h3>
                    <a href="{{ route('client.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('name') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <input 
                          type="hidden"
                          value="#"
                          name="link_path" 
                          class="form-control @error('link_path') is-invalid @enderror" 
                          id="link_path"
                          aria-describedby="" 
                          aria-invalid="true" 
                      />

                    {{-- <div class="form-group">
                        <label for="">Link URL</label>
                        <input 
                            type="text" 
                            name="link_path" 
                            class="form-control @error('link_path') is-invalid @enderror" 
                            id="link_path"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('link_path') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div> --}}
                    
                    <div class="form-group">
                        <label for="">Image</label>
                        <input 
                            type="file" 
                            name="client_image" 
                            class="form-control @error('client_image') is-invalid @enderror" 
                            id="client_image"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('client_image') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
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