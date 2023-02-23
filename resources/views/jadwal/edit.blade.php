@extends('template/admin/app')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Jadwal</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Edit Jadwal</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container card">
        <form action="/jadwal/edit/{{$data->id}}" method="post" >
            @csrf
            <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Pasien</label>
                      <select name="pasien" id="pasien" class="form-control">
                        <option value="Pasien 1">Pasien 1</option>
                      </select>
                    </div>
                  </div>
                </div>
            <div class="form-group">
                <label for="layanan">Jenis Pelayanan</label>
                <select name="layanan" id="layanan" class="form-control">
                    <option value="vaksin" {{$data->pelayanan =="vaksin" ? 'selected' : ''}}>Vaksin</option>
                    <option value="check-up" {{$data->pelayanan =="check-up" ? 'selected' : ''}}>Check UP</option>
                    <option value="steril" {{$data->pelayanan =="steril" ? 'selected' : ''}}>Sterilisasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Pilih Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="tanggal" value="{{$data->tanggal}}">
            </div>
            <div class="form-group">
                <label for="jam">Pilih Jam</label>
                <div class="row">
                    <div class="col-lg-4 ml-4">
                        <h6>Pagi</h6>
                        <input class="" type="radio" name="jam" id="jam" value="07:00" > 07:00 <br>
                        <input class="" type="radio" name="jam" id="jam" value="07:30"> 07:30
                    </div>
                    <div class="col-lg-4 ml-4">
                        <h6>Sore</h6>
                        <input class="" type="radio" name="jam" id="jam" value="15:00"> 15:00 <br>
                        <input class="" type="radio" name="jam" id="jam" value="15:30"> 15:30
                    </div>
                </div>
            </div>
            <button id="submit" type="submit" class="btn btn-info mb-3">Submit</button>
        </form>
    </div>
</section>
@stop
@push('script')
<script>
    var btn = document.getElementById('submit');
    @guest {
        btn.insertAdjacentHTML('beforebegin',
        '<span>Anda Belum Login, <a href="/login">login</a></span> <br>'
        )
        btn.disabled = true;
    }
    @else{
        btn.disabled = false;
    }
    @endguest
</script>
@endpush