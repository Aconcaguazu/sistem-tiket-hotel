<!DOCTYPE html>
<html>
<head>
    <title>Login Dulu Masdbro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/stylee.css" />
</head>
<body>
    <div id="booking" class="section">
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: transparent;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Login Dulu Masbro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <video autoplay muted loop id="bg-video">
        <source src="img/video.mp4" type="video/mp4">
      </video>

    <center>
        <div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1></h1>
						</div>
                            <form>
                                <table class="table table-striped">
                                    <thead>
                                        <a href="{{ route('login') }}" class="btn btn-outline-light">login</a>
                                        &nbsp; &nbsp;
                                        <a href="{{ route('register-user') }}" class="btn btn-outline-light">Register</a>
                                    </thead>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </center>

    </div>
    @yield('content')

</body>
</html>