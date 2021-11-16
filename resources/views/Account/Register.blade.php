@extends('Template.index')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <form action="" method="POST">
                <h1 class="text-center">Halaman Register</h1>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Username..." class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email..." class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password..." class="form-control">
                        <input type="checkbox" name="checkbox" id="checkbox" onclick="showPassword()" class="btnshow"> Show Password
                    </div>
                    <button class="btn btn-primary" type="submit">Register</button>
                </form>
                <small>Have Any Account <a href="/">Login Here</a> </small>
            </form>
        </div>
    </div>
@endsection
