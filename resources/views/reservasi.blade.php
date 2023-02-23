@extends('template/user/app')
@section('content')
<section class="page-section">
    <div class="container card">
        <div class="card-header">
            <h1>Buat Reservasi</h1>
        </div>
        <form action="/reservasi" method="post" >
            @csrf
            <div class="form-group">
                <label for="layanan">Jenis Pelayanan</label>
                <select name="layanan" id="layanan">
                    <option value="vaksin">Vaksin</option>
                    <option value="check-up">Check UP</option>
                    <option value="steril">Sterilisasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Pilih Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="tanggal" >
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
                        <input class="" type="radio" name="jam" id="jam" > 15:00 <br>
                        <input class="" type="radio" name="jam" id="jam" > 15:30
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