<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RestaurantManager | Đăng Ký</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ URL('images2/spatula2.svg') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>

<body style="background-color: #eee">
    <section class="" style="background-color: #eee; padding-top: 10px; padding-bottom: 20px;">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">

                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-1">
                                    <div class="text-center">

                                        <img src="{{ URL('images1/register.png') }}" class="img-fluid" alt="Sample image">
                                        <!-- <h4 >Restaurant Manager</h4> -->
                                        <a class="mt-1 mb-2 pb-1 text-black" href="/">Tạo tài khoản và bắt đầu quản lý
                                            nhà hàng của bạn một cách chuyên nghiệp.</a>
                                    </div>
                                </div>

                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-2">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký nhà hàng</p>

                                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('registerStore') }}">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-utensils fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="Ten_nha_hang" name="Ten_nha_hang"
                                                    :value="old('Ten_nha_hang')" required autofocus
                                                    autocomplete="Ten_nha_hang" class="form-control" />
                                                <label class="form-label" for="Ten_nha_hang">Tên nhà hàng</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="Dia_chi" name="Dia_chi" :value="old('Dia_chi')"
                                                    required autofocus autocomplete="Dia_chi" class="form-control" />
                                                <label class="form-label" for="Dia_chi">Địa chỉ</label>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="SDT" name="SDT" :value="old('SDT')" required
                                                    autofocus autocomplete="SDT" class="form-control" />
                                                <label class="form-label" for="SDT">Số điện thoại</label>
                                            </div>
                                        </div>

                                        <!--   <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" />
                                                <label class="form-label" for="name">Name</label>
                                            </div>
                                        </div> -->

                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input class="form-control" id="email" type="email" name="email"
                                                    :value="old('email')" required />
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-user-edit fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="Ten_dang_nhap" name="Ten_dang_nhap"
                                                    :value="old('Ten_dang_nhap')" required autofocus
                                                    autocomplete="Ten_dang_nhap" class="form-control" />
                                                <label class="form-label" for="Ten_dang_nhap">Tên đăng nhập</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input class="form-control" id="password" type="password"
                                                    name="password" required autocomplete="new-password" />
                                                <label class="form-label" for="password">Mật khẩu</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input id="password_confirmation" class="form-control" type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                                                <label class="form-label" for="password_confirmation">Nhập lại mật
                                                    khẩu</label>
                                            </div>
                                        </div>

                                        {{-- <div class="col d-flex justify-content-center">
                                            <div class="form-check d-flex justify-content-center mt-4">
                                                <input class="form-check-input" type="checkbox" value="" id="form2Example34"/>
                                                <label class="form-check-label" for="form2Example34"> 
                                                    Tôi đồng ý tất cả tuyên bố trong <a href="#!">Điều khoản dịch vụ</a>
                                                </label>
                                            </div>
                                        </div> --}}

                                        <div class="d-flex justify-content-center mx mt-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng
                                                ký</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-1">
                                            <p class="mb-0 me-2">Đã có tài khoản?</p>
                                            <a href="{{ route('auth.login') }}" type="button"
                                                class="btn btn-outline-success">Đăng nhập</a>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>