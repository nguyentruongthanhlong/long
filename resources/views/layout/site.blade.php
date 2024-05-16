<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @yield('header')
</head>

<body>
    <!-- header -->
    <header>
        <section class="myheader"></section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 py-3">
                    <img src="images/logo.webp" class="img-fluid" alt="Logo">
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-4">
                                        <i class="fa-solid fa-headset"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    Tư vấn hỗ trợ<br>
                                    <strong class="text-danger">kakaka</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-4">
                                        <i class="fa-regular fa-circle-user"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    Chào mừng<br>
                                    <strong class="text-danger">Đăng nhập</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-3">
                            <a href="#" class="position-relative">
                            <span class="fs-4 text-black"><i class="fa-regular fa-heart"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              0
                              <span class="visually-hidden">unread messages</span>
                            </span>
                        </a></div>
                        <div class="col-3">
                            <a href="#" class="position-relative">
                            <span class="fs-4 text-black"><i class="fa-solid fa-suitcase"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              0
                              <span class="visually-hidden">unread messages</span>
                            </span>
                        </a></div>
                        <div class="col-3">
                            <a href="#" class="position-relative">
                            <span class="fs-4 text-black"><i class="fa-solid fa-code-compare"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              0
                              <span class="visually-hidden">unread messages</span>
                            </span>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="mymainmenu bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-white py-3">Danh mục sản phẩm</div>
                    <div class="col-md-9">
                        <nav class="navbar navbar-expand-lg bg-danger">
                            <div class="container-fluid">
                              <a class="navbar-brand d-none" href="#">Navbar</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link text-white active" aria-current="page" href="#">Trang chủ</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Giới thiệu</a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Sản phẩm
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" aria-disabled="true">Tin mới</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" aria-disabled="true">Tuyển dụng</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" aria-disabled="true">Liên hệ</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
            </div>
        </section>
        @yield('maincontent')
    </main>

    <!-- footer -->
    <footer class="footer">
        <section class="myfooter bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="fs-5">VĂN PHÒNG GIAO DỊCH</h4>
                        <ul class="list-menu">						
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>						
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>						
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>						
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>						
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>						
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>						
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fs-5">VỀ CHÚNG TÔI</h4>
                        <ul class="list-menu">						
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>						
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>						
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>						
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>						
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>						
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>						
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fs-5">CHÍNH SÁCH BÁN HÀNG</h4>
                        <ul class="list-menu">						
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>						
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>						
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>						
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>						
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>						
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>						
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fs-5">THEO DÕI CHÚNG TÔI</h4>
                        <ul class="list-menu">						
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>						
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>						
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>						
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>						
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>						
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>						
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h5>THIÊN ĐƯỜNG MUA SẮM POCO MART</h5>
                        <p class="m-0">Copyright@ 2021 Công ty cổ phần thương mại Poco Mart</p>
                        <p class="m-0">Chứng nhận ĐKKD số: 0388282938 do sở KH & ĐT TP.Hà Nội cấp</p>
                        <p class="m-0">Địa chỉ: Tòa nhà Ladeco 266 Đội Cấn, Ba Đình, Hà Nội</p>
                        <p class="m-0">Điện thoại: 19006750 - Email: support@sapo.vn</p>
                    </div>
                    <div class="col-md-6">
                        <h5>NHẬN TIN KHUYẾN MÃI</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text text-white bg-danger" id="basic-addon2">Đăng ký</span>
                          </div>
                          <div>
                            <span class="box40 border border-danger mr-1 text-primary">
                                <i class="fa-brands fa-facebook"></i>
                            </span>
                            <span class="box40 border border-danger mr-3">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                            <span class="box40 border border-danger mr-3">
                                <i class="fa-brands fa-google"></i>
                            </span>
                            <span class="box40 border border-danger mr-3 text-danger">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                          </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">Bản quyền thuộc về Ego Creative Cung cấp bởi Sapo</div>
                    <div class="col-md-6 text-end">
                        Trang chủ
                        Giới thiệu
                        Sản phẩm
                        Tin mới nhất
                        Câu hỏi thường gặp
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('footer')
</body>

</html>