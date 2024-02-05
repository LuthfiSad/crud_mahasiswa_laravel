@include('layout.header')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-5 m-3 border-radius-lg"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">

    </div>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Register</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/registration">
                            @csrf
                            <div class="mb-3">
                                <input type="text" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" required autofocus
                                    name="name" placeholder="Name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                    <input type="tel" value="{{ ltrim(old('no_telp'), '0') }}"
                                        class="form-control @error('no_telp') is-invalid @enderror" required
                                        name="no_telp" placeholder="Nomor Telepon">
                                </div>
                                @error('no_telp')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                {{-- <small class="text-danger">kocag</small> --}}
                            </div>
                            <div class="mb-3">
                                <input type="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" required name="email"
                                    placeholder="Email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    required name="password" placeholder="Password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}"
                                    class="text-dark font-weight-bolder">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layout.footer')
