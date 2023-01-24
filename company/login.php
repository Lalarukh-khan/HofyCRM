<?php include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Elite.com</title>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
<div id="app">
        <!-- <div id="main"> -->
            <section class="container" style="margin-top:5%;">
                    <div class="card">
                        <div class="card-body">
                            <section id="multiple-column-form">
							<div class="col-md-12 col-12">
                            <div class=" row">
							<div class="col-md-3 col-12"></div>
								<div class="col-md-6 col-12">
                                <div class="card-header">
                                    <h3 class="card-title">Login Here!</h3>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" method="post" action="login.php">
										<?php include('errors.php'); ?>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Email</label>
                                                            <div class="position-relative">
                                                                <input type="email" name="emp_email" class="form-control"
                                                                    placeholder="Email" id="email-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Password</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" name="emp_password"
                                                                    placeholder="Password" id="password-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class='form-check'>
                                                            <div class="checkbox mt-2">
                                                                <input type="checkbox" id="remember-me-v"
                                                                    class='form-check-input' checked>
                                                                <label for="remember-me-v">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" name="login_user"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-3 col-12"></div>
						</div>
                        </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
                        </div>
                    </div>
                </section>
        <!-- </div> -->
    </div>
</body>
</html>
