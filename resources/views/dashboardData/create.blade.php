@extends('dashboardLayout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Smartphone</h1>
</div>

<div class="col-lg-4">
    <form method="post" action="/dashboard/data" class="mb-5" enctype="multipart/form-data">
        @csrf

        <!-- smartphone form -->
        <div class="mb-3">
          <label for="smartphone" class="form-label @error('smartphone') is-invalid @enderror">Nama Smartphone</label>
          <input type="text" class="form-control" id="smartphone" name="smartphone" placeholder="Realme 5 Pro, etc" value="{{ old('smartphone') }}">
          @error('smartphone')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>

        <!-- cpu form -->
        <div class="mb-3">
            <label for="cpu" class="form-label @error('cpu') is-invalid @enderror">CPU (Ghz)</label>
            <input type="float" class="form-control" id="cpu" name="cpu" placeholder="2, 2.5, 2.25, etc" value="{{ old('cpu') }}">
            @error('cpu')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>

        <!-- ram form -->
          <div class="mb-3">
            <label for="ram" class="form-label @error('ram') is-invalid @enderror">RAM (GB)</label>
            <input type="integer" class="form-control" id="ram" name="ram" placeholder="2, 3, 4, 6, 8, etc" value="{{ old('ram') }}">
            @error('ram')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>

        <!-- storage form -->
          <div class="mb-3">
            <label for="storage" class="form-label @error('storage') is-invalid @enderror">Storage (GB)</label>
            <input type="integer" class="form-control" id="storage" name="storage" placeholder="16, 32, 64, 128, etc" value="{{ old('storage') }}">
            @error('storage')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>

        <!-- layar form -->
          <div class="mb-3">
            <label for="layar" class="form-label @error('layar') is-invalid @enderror">Layar (inch)</label>
            <input type="float" class="form-control" id="layar" name="layar" placeholder="6, 6.5, 6.43, etc" value="{{ old('layar') }}">
            @error('layar')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>

        <!-- baterai form -->
          <div class="mb-3">
            <label for="baterai" class="form-label @error('baterai') is-invalid @enderror">Baterai (mAh)</label>
            <input type="integer" class="form-control" id="baterai" name="baterai" placeholder="4320, 5000, 6000, etc"  value="{{ old('baterai') }}">
            @error('baterai')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>

        <!-- harga form -->
          <div class="mb-3">
            <label for="harga" class="form-label @error('harga') is-invalid @enderror">Harga (RP)</label>
            <input type="integer" class="form-control" id="harga" name="harga" placeholder="2999000, 3499000, etc"  value="{{ old('harga') }}">
            @error('harga')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>

        <!-- image form -->
        <div class="mb-3">
          <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar Smartphone</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

<!-- preview image -->
<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>

@endsection