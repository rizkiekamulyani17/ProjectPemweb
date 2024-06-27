@extends('layouts.login')
@section('title')
    Forgot Pasword
@endsection
@section('content')
    <!-- ======= main ======= -->
    <section class="my-login-page">
        <div class="container form-Bg">
            <div class="row justify-content-md-center">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="{{ url('frontend/images/lock.png') }}" alt="logo" />
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            {{-- login --}}
                            <h4 class="card-title text-center"><p class="login-box-msg">Masukkan Password Baru Kamu</p></h4>
                            <form action="{{ route('validasi-forgot-password-act') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control"
                            placeholder="Masukkan Password Baru">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                        </div>
                    </div>
                    <div class="footer">
                        <p>Copyright &copy;
                            {{ now()->year }} &mdash; SPK</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
@endsection