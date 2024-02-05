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
        <form action="/mahasiswa" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama" type="text" placeholder="Masukan Nama">
              @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input id="nim" type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{ old('nim') }}" placeholder="Masukan NIM">
                @error('nim') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Masukan Gambar</label>
              <img src="" class="img-preview mb-2" width="300px" alt="">
              <input class="form-control @error('image') is-invalid  @enderror" name="image" onchange="previewImage()" type="file" id="image">
              @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="kelas">Kelas</label>
              <select name="class_mahasiswa_id" id="kelas" class="form-control @error('class_mahasiswa_id') is-invalid @enderror">
                <option value="" selected disabled>Pilih Kelas</option>
                @foreach ($classes as $class)
                @if ($class->id == old('class_mahasiswa_id'))
                  <option value="{{ $class->id }}" selected>{{ $class->kelas }}</option>
                @else
                  <option value="{{ $class->id }}">{{ $class->kelas }}</option>
                @endif
                @endforeach
              </select>
              @error('class_mahasiswa_id') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan Moral</label>
              <div id="editor"></div>
              <textarea class="form-control" style="display: none" name="pesan" id="pesan" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="example-text-input @error('tanggal') is-invalid @enderror">Tempat Lahir</label>
              <input class="form-control" type="text" name="tempat" placeholder="Masukan Tempat Lahir" value="{{ old('tempat') }}">
              @error('tempat') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="example-text-input @error('lahir') is-invalid @enderror">Tanggal Lahir</label>
              <input class="form-control" type="date" name="lahir" placeholder="Masukan Tanggal Lahir" value="{{ old('lahir') }}">
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
@push('style')
<link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" />
{{-- trix css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/trix.css') }}"> --}}
@endpush
@push('script')
{{-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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
              // console.log(oFREvent);
                imgPreview.src = oFREvent.target.result; 
            }
        }
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{'header': 1}, {'header': 2}],               // custom button values
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
            [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
            [{'direction': 'rtl'}],                         // text direction
            [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            [{'color': []}, {'background': []}],          // dropdown with defaults from theme
            [{'font': []}],
            [{'align': []}],
            ['link'],          // add's image support
            // ['clean']
        ];
        quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions,
            },
            theme: 'snow'
        });
        quill.on('text-change', function (delta, oldDelta, source) {
          // console.log('p');
          document.getElementById("pesan").textContent = document.querySelector(".ql-editor").innerHTML;
        });
</script>
{{-- trix js --}}
{{-- <script src="{{ asset('js/trix.umd.min.js') }}"></script> --}}

{{-- ckeditor --}}
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script> --}}
{{-- <script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script> --}}
@endpush

