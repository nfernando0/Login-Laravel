@extends('Template.index')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <form action="" method="POST">
                @csrf
                <h1 class="text-center">Please Login</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email..." class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password..." class="form-control">
                        <input type="checkbox" name="checkbox" id="checkbox" onclick="showPassword()" class="btnshow"> Show Password
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
                <p class="text-center">Don't Have Any Account <a href="/regis">Register Here</a> </p>
            </form>
        </div>
    </div>
@endsection
