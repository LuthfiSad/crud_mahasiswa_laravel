@extends('layout.master')
@section('content')
    <div class="col-md-6 mx-auto">
        <div class="card card-profile">
            <div class="card-img-top bg-dark" style="height: 100px;"></div>
            <div class="row justify-content-center">
                <div class="col-5 col-sm-4 order-lg-2">
                    <div class="mt-n4 mb-4 mt-sm-n5">
                        <img src="{{ asset(($mahasiswa->image ? 'storage/'.$mahasiswa->image : 'img/team-2.jpg')) }}"
                            class="rounded-circle img-fluid border border-2 border-white">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="text-center mt-4">
                    <h5>
                        {{ $mahasiswa->nama }}
                    </h5>
                    <div class="text-start">
                        <div>
                            NIM : {{ $mahasiswa->nim }}
                        </div>
                        <div>
                            Kelas : {{ $mahasiswa->classMahasiswa->kelas }}
                        </div>
                        <div>
                            Tempat, Tanggal Lahir : {{ $mahasiswa->tempat }}, {{ $mahasiswa->lahir }}
                        </div>
                        <div class="align-middle text-center mt-3" id="aksi">
                            <a href="/mahasiswa"
                                class="badge badge-sm bg-gradient-secondary font-weight-bold text-xs">
                                Back
                            </a>
                            <a href="/mahasiswa/{{ $mahasiswa->nim }}/edit"
                                class="badge badge-sm bg-gradient-warning font-weight-bold text-xs">
                                Edit
                            </a>
                            <form action="/mahasiswa/{{ $mahasiswa->nim }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('Apakah Benar ingin Menghapus Data {{ $mahasiswa->nama }}')" class="badge badge-sm border-0 bg-gradient-danger font-weight-bold text-xs">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
