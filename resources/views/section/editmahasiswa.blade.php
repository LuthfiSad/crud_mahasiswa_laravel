@extends('layout.master')
@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex justify-content-between align-items-center">
          <p class="mb-0">Tambah Profile</p>
          <a href="/mahasiswa" class="badge border-0 bg-gradient-secondary">back</a>
        </div>
      </div>
      <div class="card-body">
        <form action="/mahasiswa/{{ $mahasiswa->nim }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="oldImage" value="{{ $mahasiswa->image }}">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
              <input class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $mahasiswa->nama) }}" name="nama" type="text" placeholder="Masukan Nama">
              @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">NIM</label>
                <input class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{ old('nim', $mahasiswa->nim) }}" placeholder="Masukan NIM">
                @error('nim') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Masukan Gambar</label>
              <img src="{{ ($mahasiswa->image ? asset('storage/'. $mahasiswa->image) : '') }}" class="d-block img-preview mb-2" width="300px" alt="">
              <input class="form-control @error('image') is-invalid  @enderror" name="image" onchange="previewImage()" type="file" id="image">
              @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Kelas</label>
              <select name="class_mahasiswa_id" class="@error('class_mahasiswa_id') is-invalid @enderror form-select">
                <option value="" selected disabled>Pilih Kelas</option>
                @foreach ($classes as $class)
                @if ($class->id == old('class_mahasiswa_id', $mahasiswa->classMahasiswa->id))
                  <option value="{{ $class->id }}" selected>{{ $class->kelas }}</option>
                @else
                  <option value="{{ $class->id }}">{{ $class->kelas }}</option>
                @endif
                @endforeach
              </select>
              @error('class_mahasiswa_id') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="example-text-input @error('tanggal') is-invalid @enderror" class="form-control-label">Tempat Lahir</label>
              <input class="form-control" type="text" name="tempat" placeholder="Masukan Tempat Lahir" value="{{ old('tempat', $mahasiswa->tempat) }}">
              @error('tempat') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="example-text-input @error('lahir') is-invalid @enderror" class="form-control-label">Tanggal Lahir</label>
              <input class="form-control" type="date" name="lahir" placeholder="Masukan Tanggal Lahir" value="{{ old('lahir', $mahasiswa->lahir) }}">
              @error('lahir') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="d-flex">
                <button class="btn btn-primary btn-sm mb-0 ms-auto">Submit</button>
                <button type="reset" class="btn btn-secondary btn-sm mb-0 ms-1">Reset</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@push('script')
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();

            // console.log(image.files[0]);
            // console.log(oFReader);
            
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
              console.log(oFREvent);
                imgPreview.src = oFREvent.target.result; 
            }
        }
    </script>
@endpush