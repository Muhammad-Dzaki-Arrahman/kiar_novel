<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiar Blog | {{ $title }}</title>
    <link rel="shortcut icon" href="/image/Girl.png">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/6ffe91ade0.js" crossorigin="anonymous"></script>
</head>
<body>
		<div class="wrapper" style="background-image: url(../image/bg-logreg.jpg);">
			<div class="inner">
                <div class="girl">
				<form action="/register" method="POST">
                    @csrf
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="name">Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="validasi alert alert-danger">{{ $message }}</div>
                            @enderror
						</div>
						<div class="form-wrapper">
							<label for="username">Username</label>
							<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
                            @error('username')
                            <div class="validasi alert alert-danger">{{ $message }}</div>
                            @enderror
						</div>
					</div>
					<div class="form-wrapper">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="validasi alert alert-danger">{{ $message }}</div>
                        @enderror
					</div>
					<div class="form-wrapper">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <div class="validasi alert alert-danger">{{ $message }}</div>
                        @enderror
					</div>

					<button>Register Now</button>
                    <small>Already Have Account ? <a href="/login">Login Now</a></small>
				</form>
                </div>
			</div>
		</div>
		
	</body>
  </html>
    