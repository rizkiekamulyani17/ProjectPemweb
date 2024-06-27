@extends('layouts.reset_password')
@section('title')
    Login
@endsection
@section('content')
    <!-- ======= main ======= -->
    
<div class="flex-center position-ref full-height">
    <form class="form-container"  method="POST">
        <h2>Forgot Password?</h2>

        <input name="email" placeholder="Enter email" value="{{request()->get('email')}}">
        <input name="password" placeholder="Enter new password">
        <input name="password_confirmation" placeholder="Confirm new password">
        <input hidden name="token" placeholder="token" value="{{request()->get('token')}}">

        <button type="submit">Submit</button>
    </form>
</div>

    </section>
@endsection