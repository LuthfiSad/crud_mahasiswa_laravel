@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12 mb-lg-0 mb-4">
            @if (session()->has('success'))
                <div class="alert alert-primary col-6 fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        {{-- <i class="fa-solid fa-xmark"></i> --}}
                    </button>
                </div>
            @endif
            @if (old('kelas'))
                <div class="alert col-6 alert-danger fade show" role="alert">
                    Gagal Menambah Kelas
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card z-index-2">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="text-capitalize m-0">Data Mahasiswa</h5>
                    <a href="mahasiswa/create" class="btn bg-gradient-primary px-1 mt-2 mb-0">Tambah Mahasiswa</a>
                    <div class="">
                        <form action="/mahasiswa" class="row my-2">
                            {{-- <div class="col-2"> --}}

                            {{-- <label for="kelas">Kelas</label> --}}
                            {{-- </div> --}}
                            <div class="col-md-8 my-auto">
                                <div class="input-group">
                                    <select class="form-select text-start input-group-text flex-grow-1 border-end-1" id="kelas" name="kelas">
                                        <option value="" selected disabled>Pilih Kelas</option>
                                        @foreach ($classes as $class)
                                            @if (request('kelas') == $class->id)
                                                <option value="{{ $class->id }}" selected>{{ $class->kelas }}</option>
                                            @else
                                                <option value="{{ $class->id }}">{{ $class->kelas }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    {{-- <span class="input-group-text text-body"><i class="fas fa-search"></i></span> --}}
                                    <input type="text" value="{{ request('search') }}" id="search"
                                        name="search" class="form-control flex-grow-3 ps-2" placeholder="Type here...">
                                    <span class="input-group-text"><button type="button" id="reset"
                                            class="btn-close" style="filter:invert(.6)"></button>
                                    </span>
                                    <button class="btn btn-outline-secondary m-0" type="submit"
                                        id="button-addon2">Button</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <td class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                        No
                                    </td>
                                    <td class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                        Nama
                                    </td>
                                    <td class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                        Nim
                                    </td>
                                    <td class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                        Kelas
                                        <button class="border-0 badge badge-sm bg-gradient-primary" type="button"
                                            data-bs-toggle="modal" data-bs-target="#modal"><i
                                                class="fa-solid fa-plus"></i></button>
                                    </td>
                                    <td class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                        Tempat, Tanggal Lahir
                                    </td>
                                    <td class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                        Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td class="text-center">
                                            <p class="text-xs mb-0">{{ $loop->iteration }}</p>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{ $mahasiswa->nama }}</h6>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $mahasiswa->nim }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $mahasiswa->classMahasiswa->kelas }}
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $mahasiswa->tempat }},
                                                {{ $mahasiswa->lahir }}</p>
                                        </td>
                                        <td class="align-middle text-center" id="aksi">
                                            <a href="mahasiswa/{{ $mahasiswa->nim }}"
                                                class="badge badge-sm bg-gradient-success font-weight-bold text-xs">
                                                Detail
                                            </a>
                                            <a href="/mahasiswa/{{ $mahasiswa->nim }}/edit"
                                                class="badge badge-sm bg-gradient-warning font-weight-bold text-xs">
                                                Edit
                                            </a>
                                            <form action="/mahasiswa/{{ $mahasiswa->nim }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    onclick="return confirm('Apakah Benar ingin Menghapus Data {{ $mahasiswa->nama }}')"
                                                    class="badge badge-sm border-0 bg-gradient-danger font-weight-bold text-xs">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $mahasiswas->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelas</h1>
                    <button type="button" class="btn-close" style="filter: invert(.6);" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="/class" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama" class="form-control-label">Kelas Baru</label>
                            <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('kelas') }}" name="kelas" type="text"
                                placeholder="Masukan Kelas Baru">
                            @error('kelas')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        <button type="submit" class="btn btn-primary m-0">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const resetButton = document.getElementById('reset');
            const selectKelas = document.getElementById('kelas');

            selectKelas.addEventListener('change', function(e) {
                const selectedValue = selectKelas.value;
                const input = searchInput.value;
                if (searchInput.value) {
                    return window.location.href =
                    `/mahasiswa?search=${input}&kelas=${selectedValue}`;
                    // return
                }
                // return
                // Arahkan halaman ke URL dengan parameter kelas
                window.location.href =
                    `/mahasiswa?kelas=${selectedValue}`; // Ganti 'path-to-controller' dengan URL yang sesuai ke controller
            });
            resetButton.addEventListener('click', function(event) {
                searchInput.value = '';
                selectKelas.selectedIndex = 0;
                searchInput.focus();
            });
        });
    </script>
@endpush
