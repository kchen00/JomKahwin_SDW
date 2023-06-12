
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

		p.border {
  			border: 1px solid;
  			border-radius: 8px;
  			padding: 5px;
		}

		.icon-button {
      border: none;
      background-color: transparent;
      cursor: pointer;
      outline: none;
      padding: 0;
    }
    
    /* Example CSS for icon styles */
    .icon-view::before {
      content: "\1F50D"; /* Unicode for the magnifying glass icon */
    }
    
    .icon-approval::before {
      content: "\2714"; /* Unicode for the checkmark icon */
    }
    
    .icon-send-email::before {
      content: "\2709"; /* Unicode for the envelope icon */
    }
    
    /* CSS for popup bar */
    .popup-bar {
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #f0f0f0;
      padding: 10px;
      display: none;
    }
    
    .popup-bar.show {
      display: block;
    }
    
    .popup-bar .message {
      display: inline-block;
      margin-right: 10px;
    }
    
    .popup-bar button {
      margin-right: 5px;
    }


	</style>
	<script src="js/settings.js"></script>
	<script src="js/app.js"></script>
	<!-- END SETTINGS -->
</head>

<body>

    <div class="wrapper" >
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand"  style="background: #3c953f;" href="/dashboard">
				<img src="https://jaip.pahang.gov.my/wp-content/uploads/2020/10/jata-pahang.png" style="height: 50px;">
				Jom Kahwin
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<small>{{ "ID:  " . Auth::guard('account')->user()->A_icNum }}</small><br>
					<small>{{ "Nama:  " . Auth::guard('account')->user()->A_name }}</small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class="sidebar-link" href="/dashboard">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                              </svg> <span class="align-middle">Laman Utama</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/dashboard">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                              </svg> <span class="align-middle">Profil</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/marriage_course/tempat">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3Zm2 .5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V4a.5.5 0 0 0-.5-.5H3Zm5 4.493c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                              </svg> <span class="align-middle">Daftar Kursus Kahwin</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/marriage_request_search">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg> <span class="align-middle">Permohonan Perkahwinan</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/StuffView_Application">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                              </svg><span class="align-middle">Daftar Perkahwinan</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/admin-dashboardIncentive">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                              </svg> <span class="align-middle">Bantuan Insentif Khas</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/consultation_admin/manageConsultation">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                              </svg> <span class="align-middle">Khidmat Nasihat</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/logout">
							<svg width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.5 7.5L10.5 10.75M13.5 7.5L10.5 4.5M13.5 7.5L4 7.5M8 13.5H1.5L1.5 1.5L8 1.5" stroke="#000000"/>
								</svg><span class="align-middle">Keluar</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
        <main class="content" >
				<div class="container-fluid" >

					{{-- Yield --}}
                    @yield('ManageConsultationView.Admin.AdminManageConsultationView')
					@yield('ManageConsultationView.Admin.ManageAdvisorView')
					@yield('ManageConsultationView.Admin.ManageApprovalApplicationView')
					@yield('ManageConsultationView.Admin.ManageConsultSessionView')
					@yield('ManageConsultationView.Admin.ManageUserApplicationView')
					@yield('ManageConsultationView.Admin.UpdatedApplicationView')
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