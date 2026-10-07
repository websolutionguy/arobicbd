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
              <li class="breadcrumb-item active">Website Setting</li>
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
                    <h3 class="card-title">Website Setting</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ route('website.update', 1) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                      <div class="row">
                        <div class="col-sm-6 col-xs-12">

                          <div class="form-group">
                            <label for="">Upload Header Logo</label>
                            <input 
                                type="file" 
                                name="header_logo" 
                                class="form-control @error('header_logo') is-invalid @enderror" 
                                id="header_logo"
                                aria-describedby="" 
                                aria-invalid="true" 
                            />
                            <br />
                            <img style="width:100px;" src="{{ asset('images/website/' . $settings->header_logo_image_path) }}" />
                            @error('header_logo') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Upload Footer Logo</label>
                            <input 
                                type="file" 
                                name="footer_logo" 
                                class="form-control @error('footer_logo') is-invalid @enderror" 
                                id="footer_logo"
                                aria-describedby="" 
                                aria-invalid="true" 
                            />
                            <br />
                            <img style="width:100px;" src="{{ asset('images/website/' . $settings->footer_logo_image_path) }}" />
                            @error('footer_logo') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                          </div>

                          <div class="card card-outline card-info">
                              <div class="card-header">
                                  <h3 class="card-title">About Details</h3>
                              </div>
                              <div class="card-body">
                                  <textarea id="summernote-about-detail" name="about_detail" class="form-control @error('about_detail') is-invalid @enderror">{{ $settings->about_description }}</textarea>
                                  @error('profile_detail') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                              </div>
                          </div>

                          <div class="card card-outline card-info">
                              <div class="card-header">
                                  <h3 class="card-title">Copyright Text</h3>
                              </div>
                              <div class="card-body">
                                  <textarea id="summernote-copyright" name="copyright" class="form-control @error('copyright') is-invalid @enderror">{{ $settings->copyright }}</textarea>
                                  @error('copyright') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                              </div>
                          </div>

                        </div>
                        <div class="col-sm-6 col-xs-12">

                          <div class="form-group">
                              <label for="">Play Store</label>
                              <input 
                                  type="text" 
                                  name="play_store" 
                                  class="form-control @error('play_store') is-invalid @enderror" 
                                  id="play_store"
                                  aria-describedby="" 
                                  aria-invalid="true"
                                  value="{{ $settings->play_store_link }}"
                              />
                              @error('play_store') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                          </div>

                          <div class="form-group">
                              <label for="">App Store</label>
                              <input 
                                  type="text" 
                                  name="app_store" 
                                  class="form-control @error('app_store') is-invalid @enderror" 
                                  id="app_store"
                                  aria-describedby="" 
                                  aria-invalid="true"
                                  value="{{ $settings->app_store_link }}"
                              />
                              @error('app_store') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
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
                                  value="{{ $settings->facebook }}"
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
                                  value="{{ $settings->twitter }}"
                              />
                              @error('twitter') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                          </div>
                        
                          <div class="form-group">
                              <label for="">Youtube</label>
                              <input 
                                  type="text" 
                                  name="youtube" 
                                  class="form-control @error('youtube') is-invalid @enderror" 
                                  id="youtube"
                                  aria-describedby="" 
                                  aria-invalid="true"
                                  value="{{ $settings->youtube }}"
                              />
                              @error('youtube') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                          </div>
                        
                          <div class="form-group">
                              <label for="">Instagrame</label>
                              <input 
                                  type="text" 
                                  name="instagrame" 
                                  class="form-control @error('instagrame') is-invalid @enderror" 
                                  id="instagrame"
                                  aria-describedby="" 
                                  aria-invalid="true"
                                  value="{{ $settings->instagrame }}"
                              />
                              @error('instagrame') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
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
                                  value="{{ $settings->linkedin }}"
                              />
                              @error('linkedin') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
                          </div>

                          <button type="submit" class="btn btn-success">Update</button>

                        </div>
                      </div>

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
    $('#summernote-about-detail').summernote()
    $('#summernote-copyright').summernote()
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection
