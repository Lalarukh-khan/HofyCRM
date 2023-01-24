<?php
   require 'header.php';
?>
<div class="home">
    <div class="container-fluid">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./assets/img/logo.png" alt="" width="120" height="40" style="object-fit: cover;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span></span>
                <span></span>
                <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="my_nav">
                    <li class="nav-item">
                    <a class="nav-link" href="about.php" id="navastyle"aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" id="navastyle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Features <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border: none; border-radius: 8px;">
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <p class="nav_drp_hd" style="padding-left: 10px;">platform</p>
                                <li><a class="dropdown-item" href="configuration.php"><i class="fa fa-suitcase" id="nav_drop_icons"></i> &nbsp; Create your remote work programme</a></li>
                            <li><a class="dropdown-item" href="remote.php"><i class="fas fa-clipboard-check" id="nav_drop_icons"></i> &nbsp;  Manage your remote work programme</a></li>
                            <li><a class="dropdown-item" href="assessment.php"><i class="fas fa-sitemap" id="nav_drop_icons"></i> &nbsp;  DSE self-assessment</a></li>
                            </div>
                            <div class="col-lg-1 col-md-1 col-12">
                                <div class="nav_vl"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" id="nav_alnmnet_drp">
                                <p class="nav_drp_hd">equipments & services</p>
                                <li><a class="dropdown-item" href="management.php"> <i class="fas fa-gift" id="nav_drop_icons"></i> &nbsp; Onboarding&nbsp;&&nbsp;lifecycle management</a></li>
                            <li><a class="dropdown-item" href="offices.php"><i class="fas fa-laptop" id="nav_drop_icons"></i> &nbsp; IT equipment & home office furniture</a></li>
                            </div>
                        </div>
                        </div>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" id="navastyle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border: none; border-radius: 8px;" id="nav_drp_lft">
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <p class="nav_drp_hd" style="font-size: 14px;">remote work management</p>
                                <li><a class="dropdown-item" href="business.php"><i class="fa fa-suitcase" id="nav_drop_icons"></i> &nbsp; Business efficiency</a></li>
                            <li><a class="dropdown-item" href="compliance.php"><i class="fas fa-clipboard-check" id="nav_drop_icons"></i> &nbsp;  Compliance</a></li>
                            <li><a class="dropdown-item" href="experience.php"><i class="fas fa-user-alt" id="nav_drop_icons"></i> &nbsp;  Employee experience</a></li>
                            </div>
                            <div class="col-lg-1 col-md-1 col-12">
                                <div class="nav_vl"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" id="nav_alnmnet_drp">
                                <p class="nav_drp_hd">research</p>
                                <li><a class="dropdown-item" href="blog.php"> <br> Blog</a></li>
                            <li><a class="dropdown-item" href="survey.php"> 2020 remote work survey</a></li>
                                <li><a class="dropdown-item" href="equipment.php"> Why invest in ergonomic equipment?</a></li>
                            <li><a class="dropdown-item" href="costs.php"> The hidden costs of equipment provisioning</a></li>
                            </div>
                        </div>
                        </div>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="faq.php" id="navastyle">FAQs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="employee.php" id="navastyle">I'm an employee</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto" id="btn_nav">
                        <button class="btn" id="navbtn">Sign in</button>
                    </ul>
                </div>
               </div>
        </nav>
    </header>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

	document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

		everyitem.addEventListener('mouseover', function(e){

			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.add('show');
				nextEl.classList.add('show');
			}

		});
		everyitem.addEventListener('mouseleave', function(e){
			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.remove('show');
				nextEl.classList.remove('show');
			}


		})
	});

}
// end if innerWidth
}); 
// DOMContentLoaded  end
</script>
   </div>