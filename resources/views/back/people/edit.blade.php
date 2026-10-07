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
              <li class="breadcrumb-item active">Edit People</li>
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
                    <h3 class="card-title">Edit People</h3>
                    <a href="{{ route('people.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif


                <form action="{{ route('people.update', $people->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $people->name }}"
                        />
                        @error('name') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Designation</label>
                        <input 
                            type="text" 
                            name="designation" 
                            class="form-control @error('designation') is-invalid @enderror" 
                            id="designation"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $people->designation }}"
                        />
                        @error('designation') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Image</label>
                        <input 
                            type="file" 
                            name="people_image" 
                            class="form-control @error('people_image') is-invalid @enderror" 
                            id="people_image"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        <br/>
                        <img style="width:50px;" src="{{ asset('images/people/' . $people->image_path) }}" />
                        @error('people_image') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input 
                            type="text" 
                            name="facebook" 
                            class="form-control @error('facebook') is-invalid @enderror" 
                            id="facebook"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $people->facebook }}"
                        />
                        @error('facebook') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Twitter</label>
                        <input 
                            type="text" 
                            name="twitter" 
                            class="form-control @error('twitter') is-invalid @enderror" 
                            id="twitter"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $people->twitter }}"
                        />
                        @error('twitter') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Linkedin</label>
                        <input 
                            type="text" 
                            name="linkedin" 
                            class="form-control @error('linkedin') is-invalid @enderror" 
                            id="linkedin"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $people->linkedin }}"
                        />
                        @error('linkedin') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Printerest</label>
                        <input 
                            type="text" 
                            name="printerest" 
                            class="form-control @error('printerest') is-invalid @enderror" 
                            id="printerest"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $people->printerest }}"
                        />
                        @error('printerest') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
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