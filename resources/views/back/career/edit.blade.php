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
              <li class="breadcrumb-item active">Edit Career</li>
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
                    <h3 class="card-title">Edit Career</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ route('career.update', $career->id) }}" method="post">
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
                            value="{{ $career->title }}"
                        />
                        @error('title') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Vacancy</label>
                        <input 
                            type="text" 
                            name="vacancy" 
                            class="form-control @error('vacancy') is-invalid @enderror" 
                            id="vacancy"
                            aria-describedby="" 
                            aria-invalid="true"
                            value="{{ $career->vacancy }}"
                        />
                        @error('vacancy') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">status</label>
                        <input 
                            type="text" 
                            name="status" 
                            class="form-control @error('status') is-invalid @enderror" 
                            id="status"
                            aria-describedby="" 
                            aria-invalid="true"
                            value="{{ $career->status }}"
                        />
                        @error('status') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Location</label>
                        <input 
                            type="text" 
                            name="location" 
                            class="form-control @error('location') is-invalid @enderror" 
                            id="location"
                            aria-describedby="" 
                            aria-invalid="true"
                            value="{{ $career->location }}"
                        />
                        @error('location') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">salary</label>
                        <input 
                            type="text" 
                            name="salary" 
                            class="form-control @error('salary') is-invalid @enderror" 
                            id="salary"
                            aria-describedby="" 
                            aria-invalid="true"
                            value="{{ $career->salary }}"
                        />
                        @error('salary') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <textarea id="summernote-career-detail" name="description" class="form-control @error('description') is-invalid @enderror">{{ $career->description }}</textarea>
                            @error('description') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Apply Email</label>
                        <input 
                            type="text" 
                            name="apply_email" 
                            class="form-control @error('apply_email') is-invalid @enderror" 
                            id="apply_email"
                            aria-describedby="" 
                            aria-invalid="true"
                            value="{{ $career->apply_email }}"
                        />
                        @error('apply_email') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Apply Link</label>
                        <input 
                            type="text" 
                            name="apply_link" 
                            class="form-control @error('apply_link') is-invalid @enderror" 
                            id="apply_link"
                            aria-describedby="" 
                            aria-invalid="true"
                            value="{{ $career->apply_link }}"
                        />
                        @error('apply_link') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
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
    $('#summernote-career-detail').summernote()
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection