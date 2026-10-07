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
              <li class="breadcrumb-item active">Hero Banner</li>
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
                    <h3 class="card-title">Hero Banner</h3>
                    <a href="{{ route('hero.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ route('hero.update', $hero->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Hero Title</label>
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control @error('title') is-invalid @enderror" 
                            id="title"
                            value="{{ $hero->title }}"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('title') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Hero Details</label>
                        <textarea 
                            name="description" 
                            class="form-control @error('description') is-invalid @enderror" 
                            id="description"
                            aria-describedby="" 
                            aria-invalid="true" 
                        >{{ $hero->description }}</textarea>
                        @error('description') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Video URL</label>
                        <input 
                            type="text" 
                            name="video_url" 
                            class="form-control @error('video_url') is-invalid @enderror" 
                            id="video_url"
                            value="{{ $hero->video_url }}"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        @error('video_url') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Image</label>
                        <input 
                            type="file" 
                            name="hero_image" 
                            class="form-control @error('hero_image') is-invalid @enderror"
                            id="hero_image"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        <br />
                        <img style="width:50px;" src="{{ asset('images/hero/' . $hero->image_path) }}" />
                        @error('hero_image') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
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