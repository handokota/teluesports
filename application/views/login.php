<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Login - TelU Esports</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-weight: normal;
            font-size: 16px;
        }

        body {
            font-family: Poppins !important;
            background: linear-gradient(180.96deg, #000000 0.82%, #00917A 129.1%);
            color: #ffffff;
        }

        a {
            text-decoration: none;
            color: #ffffff;
        }

        li {
            list-style: none;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #ffffff;
            font-family: Poppins !important;
            margin-top: 20px;
            margin-left: 5%;
            margin-right: 5%;
        }

        .btn-primary {
            background-color: #00917A;
            border: none;
            width: 120px;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .btn-primary:hover, .btn-primary:active {
            transition: 0.5s;
            background-color: #006655 !important;
        }

        .form-login input.form-control {
            background-color: #005345;
            color: #ffffff;
            border-color: #00917A;
            font-size: 16px;
            border-radius: 6px;
        }

        .form-login textarea.form-control {
            background-color: #005345;
            color: #ffffff;
            border-color: #00917A;
            font-size: 16px;
            border-radius: 6px;
        }

        .form-login input.form-check-input {
            background-color: #005345;
            border-color: #00917A;
        }

        .login-section {
            margin-left: 5%;
            margin-right: 5%;
            text-align: center;
            margin-bottom: 50px;
        }

        .login-page {
            margin-top: 50px;
        }

        .login-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }

        .form-login {
            max-width: 1000px;
            margin: 0 auto;
        }

        .form-login .card {
            background-color: transparent;
            /* border: none;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important; */
        }
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?> 
    <?php if (isset($error_message)): ?>
<div class="alert alert-danger text-center" style="border-radius: 0" role="alert">
    <?= $error_message; ?>
</div>
<?php endif; ?>
    <section class="login-section">
      <div class="container">
        <p class="login-page text-center">Home > <a style="color:#00917A;">Login</a></p> 
        <h1 class="login-title text-center">LOGIN</h1>
      </div>
      <div class="form-login text-start">
      <div class="container">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border: none">
                    <div class="container">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-3 mb-md-5 text-center" style="font-weight: bold;">Sign in to TelU Esports</h3>
                            <!-- <h5 class="mb-4 pb-2 pb-md-3 mb-md-5 text-center">Fill the form below</h5> -->
                            <form method="post" action="<?php echo base_url('login/process'); ?>">
                                <div class="form-group mb-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-lg" name="username" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" required />
                                </div>
                                <div class="text-end mt-3 mb-4">
                                    <p>Don't have an account? <a href="<?php echo base_url('signup'); ?>" style="color: #00bfff;">Sign Up</a></p>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div> 
    </section>
    <?php $this->load->view('footer'); ?>
</body>
</html>
