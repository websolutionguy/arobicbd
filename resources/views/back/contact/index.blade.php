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
              <li class="breadcrumb-item active">Contact</li>
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
                    <h3 class="card-title">Contact</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif


                <form action="{{ route('contact.update', 1) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input 
                            type="text" 
                            name="phone" 
                            class="form-control @error('phone') is-invalid @enderror" 
                            id="phone"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $contact->phone }}"
                        />
                        @error('phone') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Phone Two</label>
                        <input 
                            type="text" 
                            name="phonetwo" 
                            class="form-control @error('phonetwo') is-invalid @enderror" 
                            id="phonetwo"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $contact->phone_two }}"
                        />
                        @error('phonetwo') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email"
                            aria-describedby="" 
                            aria-invalid="true" 
                            value="{{ $contact->email }}"
                        />
                        @error('email') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea 
                            name="address" 
                            class="form-control @error('address') is-invalid @enderror" 
                            id="address"
                            aria-describedby="" 
                            aria-invalid="true" 
                        >{{ $contact->address }}</textarea>
                        @error('address') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Schedule</label>
                        <textarea 
                            name="schedule" 
                            class="form-control @error('schedule') is-invalid @enderror" 
                            id="schedule"
                            aria-describedby="" 
                            aria-invalid="true" 
                        >{{ $contact->schedule }}</textarea>
                        @error('schedule') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Map Embeded Code</h3>
                        </div>
                        <div class="card-body">
                            <textarea id="summernote-map" name="map_embeded" class="form-control @error('map_embeded') is-invalid @enderror">{{ $contact->map_address }}</textarea>
                            @error('map_embeded') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
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
    $('#summernote-map').summernote()
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection