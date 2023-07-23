<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiar Blog | {{ $title }}</title>
    <link rel="shortcut icon" href="/image/Girl.png">
    <link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/6ffe91ade0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="wrapper" style="background-image: url(../image/bg-logreg.jpg);">
                    <div class="inner">
                        <div class="girl">
                        <form action="/login" method="post">
                            @csrf
                            <h3>Login</h3>
                            @if(session()->has('success'))
                            <div class="bg-white justify-content-center text-center py-1 sm:px-4 mb-2 rounded">
                                <div class="p-2 bg-green-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                  <span class="flex rounded-full bg-green-700 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                                  <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
                                  <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                                </div>
                              </div>
                            @endif
                            @if(session()->has('loginError'))
                            <div class="bg-white bg-transparent justify-content-center text-center py-1 sm:px-4 mb-2 rounded">
                                <div class="p-2 bg-rose-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                  <span class="flex rounded-full bg-pink-700 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                                  <span class="font-semibold mr-2 text-left flex-auto">{{ session('loginError') }}</span>
                                  {{-- <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg> --}}
                                </div>
                              </div>
                            @endif
                            <div class="form-wrapper">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus required>
                                @error('email')
                                <div class="validasi alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-wrapper">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button>Login</button>
                            <small>Not Registered ? <a href="/register">Register Now</a></small>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</body>
  </html>
    