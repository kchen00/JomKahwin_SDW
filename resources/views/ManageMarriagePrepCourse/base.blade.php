
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">
    <link rel="icon" type="image/png" href="https://www.eperolehan.gov.my/documents/10182/17020/agency-links-02.png">
    

	<title>Marriage Preparation Course</title>

	<style>
		body {
			opacity: 0;
		}
		#chartdiv {
       width: 100%;
       height: 500px;
        }
       #chartdivPie {
      width: 100%;
      height: 300px;
       }

	</style>
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
</head>

<body>
	<div class="header">
		style:text-align="center";
	</div>

	<div class='register'>
        style:display="inline-block";
        style:width="150px";
        style:text-align="right";
	</div>
    
	label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }



	<div class="splash active">
		<div class="splash-icon"></div>

	</div>

    <div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="dashboard-admin">
				<img src="https://www.eperolehan.gov.my/documents/10182/17020/agency-links-02.png" style="height: 50px;">
				MyTTX
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="https://m.economictimes.com/thumb/msid-85509633,width-1200,height-900,resizemode-4,imgsize-55892/angelina-jolie-posted-the-entire-letter-of-the-young-girl-along-with-a-photo-of-seven-afghan-women-standing-with-their-backs-to-the-camera-.jpg" class="img-fluid rounded-circle mb-2" alt="Lily Jane" />
					<div class="fw-bold">Angelina</div>
					<small>Admin</small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class="sidebar-link" href="dashboard-admin">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                              </svg> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#remisi" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">PROFIL</span>
						</a>
                        
						<a data-bs-target="#remisi" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">KURSUS PRA PERKAHWINAN</span>
						</a>

						<ul id="remisi" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="remisi-admin">TERMA DAN SYARAT</a></li>
						</ul>

						<ul id="remisi" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="remisi-rayuan-admin">DAFTAR KURSUS KAHWIN</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#permohonan" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">PERMOHONAN PERKAHWINAN</span>
						</a>
					</li>
				
					<li class="sidebar-item">
						<a data-bs-target="#permohonan" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">DAFTAR PERKAHWINAN</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#permohonan" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">BANTUAN PERKAHWINAN</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#permohonan" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">KHIDMAT NASIHAT</span>
						</a>
					</li>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				

			
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown ms-lg-2">
							<a href="/" class="text-light">
								<i class="align-middle me-2 text-light" data-feather="log-out"></i>Sign out
							</a>
							
						</li>
					</ul>
				</div>

			</nav>
        
            
        <main class="content">
				<div class="container-fluid">

					{{-- Yield --}}
                    @yield('ManageMarriagePrepCourse.mainPageView')
					@yield('ManageMarriagePrepCourse.searchAnjuran')
                    @yield('ManageMarriagePrepCourse.registerCourse')





					</div>

			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-start">
						</div>
						<div class="col-4 text-end">
							<p class="mb-0">
								&copy; 2021</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="js/app.js"></script>

</body>

</html>