<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login - Session 11 Login Page Task.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Login</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href=""><i class="lni lni-home"></i> Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <form class="card login-form" method="post">
                    <div class="card-body">
                        <div class="title">
                            <h3>Login Now</h3>
                            <p>You can login using your social media account or email address.</p>
                        </div>
                        <div class="social-login">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn" href=""><i class="lni lni-facebook-filled"></i> Facebook
                                        login</a></div>
                                <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn" href=""><i class="lni lni-twitter-original"></i> Twitter
                                        login</a></div>
                                <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn" href=""><i class="lni lni-google"></i> Google login</a>
                                </div>
                            </div>
                        </div>
                        <div class="alt-option">
                            <span>Or</span>
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Email</label>
                            <input class="form-control" type="email" id="reg-email" required>
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Password</label>
                            <input class="form-control" type="password" id="reg-pass" required>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between bottom-content">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <a class="lost-pass" href="">Forgot password?</a>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Login</button>
                        </div>
                        <p class="outer-link">Don't have an account? <a href="">Register here </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
