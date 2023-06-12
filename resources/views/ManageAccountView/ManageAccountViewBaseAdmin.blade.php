
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/png" href="https://jaip.pahang.gov.my/wp-content/uploads/2020/10/jata-pahang.png">
	<link href="\css\modern.css" rel="stylesheet">
    

	<title>JomKahwin-EMunakahat</title>

	<style>
		body {
			opacity: 0;
		}

		.wrapper:before
		{
			background:#3c953f;
			content:" ";
			height:264px;
			left:0;
			position:absolute;
			top:0;width:100%
		}

	


	</style>
	<script src="js/settings.js"></script>
	<script src="js/app.js"></script>
	<!-- END SETTINGS -->
</head>

<body>
   
        <main class="content" >
				<div class="container-fluid" >

					{{-- Yield --}}
                    @yield('ManageAccountView.RegisterStaffAccountView')
					</div>

			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-start">
						</div>
						<div class="col-4 text-end">
							<p class="mb-0">
								&copy; 2023</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>
	

</body>

</html>