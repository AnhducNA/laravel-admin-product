<!DOCTYPE html>
<html>

<head>
    <title>Quản lý ISMART</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/reset.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/responsive.css')}}" rel="stylesheet" type="text/css" />


</head>


<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div class="wp-inner clearfix">
                    <a href="{{route('list_post')}}" title="" id="logo" class="fl-left">ADMIN</a>
                    <ul id="main-menu" class="fl-left">
                        <li>
                            <a href="{{route('list_page')}}" title="">Trang</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('add_page')}}" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="{{route('list_page')}}" title="">Danh sách trang</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('list_post')}}" title="">Bài viết</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('add_post')}}" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="{{route('list_post')}}" title="">Danh sách bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('list_cat_post')}}" title="">Danh mục bài viết</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('list_product')}}" title="">Sản phẩm</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('add_product')}}" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="{{route('list_product')}}" title="">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('list_cat_product')}}" title="">Danh mục sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" title="">Bán hàng</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('list_order')}}" title="">Danh sách đơn hàng</a>
                                </li>
                                <li>
                                    <a href="{{route('list_customer')}}" title="">Danh sách khách hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" title="">Users</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('add_user')}}" title="">Thêm mới Users</a>
                                </li>
                                <li>
                                    <a href="{{route('list_user')}}" title="">Danh sách Users</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('menu')}}" title="">Menu</a>
                        </li>
                    </ul>
                    <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                        <button class="dropdown-toggle clearfix" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <div id="thumb-circle" class="fl-left">
                                <img src="{{asset('assets/admin/images/img-admin.png')}}">
                            </div>
                            <h3 id="account" class="fl-right">Admin</h3>
                        </button>
                        <ul id="dropdown-user-menu" class="dropdown-menu">
                            <li><a href="{{route('info_account')}}" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                            <li><a href="#" title="Thoát">Thoát</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            @yield('content')

            <div id="footer-wp">
                <div class="wp-inner">
                    <p id="copyright">2022 © Admin Theme by Php Master</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/admin/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/js/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/js/main.js')}}" type="text/javascript"></script>
    <!-- #dropdown-user -->
    <script>
        $('#dropdown-user').mouseover(function() {
            if ($('#dropdown-user-menu').hasClass('.active')) {
                $('#dropdown-user-menu').css('display', 'none');
                $('#dropdown-user-menu').removeClass('.active');

            } else {
                $('#dropdown-user-menu').addClass('.active');
                $('#dropdown-user-menu').css('display', 'block');
            }
        })
        $('#dropdown-user').mouseout(function() {
            if ($('#dropdown-user-menu').hasClass('.active')) {
                $('#dropdown-user-menu').css('display', 'none');
                $('#dropdown-user-menu').removeClass('.active');

            } else {
                $('#dropdown-user-menu').addClass('.active');
                $('#dropdown-user-menu').css('display', 'block');
            }
        })
    </script>
</body>

</html>