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
              <li class="breadcrumb-item active">Profile</li>
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
                    <h3 class="card-title">Profile</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif


                <form action="{{ route('profile.update', 1) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Title</label>
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control @error('title') is-invalid @enderror" 
                            id="title"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $profile->title }}"
                        />
                        @error('title') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    

                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Profile Details</h3>
                        </div>
                        <div class="card-body">
                            <textarea id="summernote-profile" name="profile_detail" class="form-control @error('profile_detail') is-invalid @enderror">{{ $profile->description }}</textarea>
                            @error('profile_detail') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Upload File</label>
                        <input 
                            type="file" 
                            name="profile_image" 
                            class="form-control @error('profile_image') is-invalid @enderror" 
                            id="profile_image"
                            aria-describedby="" 
                            aria-invalid="true" 
                        />
                        <br/>
                        <iframe src="{{ asset('images/profile/' . $profile->image_path) }}" width="100%" height="800px"></iframe>
                        @error('profile_image') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
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

@section('script')
<script>
  $(function () {
    // Summernote
    $('#summernote-profile').summernote()
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection
