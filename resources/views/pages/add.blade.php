@extends('template/admin/app')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-6">

            <!-- general form elements disabled -->
            <div class="card card-warning">
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="/pages/add" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Konten</label>
                        <textarea class="ckeditor form-control" name="konten" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jenis</label>
                        <select class="form-control" name="jenis">
                          <option>Artikel</option>
                          <option>About</option>
                          <option>Home</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <dif class="form-group">
                                <label>Gambar</label>
                                <input class="form-control" type="file" name="gambar" id="gambar" accept="image/*">
                        </dif>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-6 mt-3">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" checked value="draft">
                          <label class="form-check-label">Draft</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value ="published">
                          <label class="form-check-label">Published</label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
           
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@stop
@push('script')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endpush