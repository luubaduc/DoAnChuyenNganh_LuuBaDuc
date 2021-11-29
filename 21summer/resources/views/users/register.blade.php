<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>21 Summer</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="{{asset('public/frontend/register/assets/favicon.png')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('public/frontend/register/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{URL::to('/index')}}">21 Summer</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/index')}}">Home</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            
                            <h3 class="fw-bolder">Đăng ký</h3>
                            <p class="lead fw-normal text-muted mb-0"> Đăng ký để tạo tài khoản !</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">

                                
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{URL::to('/dangky_user')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="ho_ten" type="text" placeholder="Điền tên của bạn..." data-sb-validations="required" />
                            <label for="name">Username</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                       
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="e_mail" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email không hợp lệ.</div>
                        </div>

                         <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="mat_khau" type="password" placeholder="Enter your password..." data-sb-validations="required"></input>
                            <label for="password">Password</label>
                            <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="dien_thoai" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-danger btn-lg" id="submitButton" name="dang_ky" type="submit">Đăng ký</button>
                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Designed and Developed by <a href="https://www.facebook.com">Đức Lưu</a></div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('public/frontend/register/js/scripts.js')}}"></script>
     
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>