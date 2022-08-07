<div id="sidebar" class="fl-left">
    <ul id="sidebar-menu">
        <li class="nav-item">
            <a href="{{route('list_page')}}" title="" class="nav-link nav-toggle">
                <span class="icon">
                    <i class="fa fa-map" aria-hidden="true"></i>
                </span>
                <span class="title">Trang</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('add_page')}}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('list_page')}}" title="" class="nav-link">Danh sách các trang</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('list_post')}}" title="" class="nav-link nav-toggle">
                <span class=" icon">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </span>
                <span class="title">Bài viết</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('add_post')}}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('list_post')}}" title="" class="nav-link">Danh sách bài viết</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('list_cat_post')}}" title="" class="nav-link">Danh mục bài viết</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('list_product')}}" title="" class="nav-link nav-toggle">
                <span class="icon">
                    <i class="fa fa-product-hunt " aria-hidden="true"></i>
                </span>
                <span class="title">Sản phẩm</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('list_product')}}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('add_product')}}" title="" class="nav-link">Danh sách sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('list_cat_product')}}" title="" class="nav-link">Danh mục sản phẩm</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('list_order')}}" title="" class="nav-link nav-toggle">
                <span class="icon">
                    <i class="fa fa-database " aria-hidden="true"></i>
                </span>
                <span class="title">Bán hàng</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('list_order')}}" title="" class="nav-link">Danh sách đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('list_customer')}}" title="" class="nav-link">Danh sách khách hàng</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('list_user')}}" title="" class="nav-link nav-toggle">
                <span class="icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <span class="title">User </span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('add_user')}}" title="" class="nav-link">Thêm mới user</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('list_user')}}" title="" class="nav-link">Danh sách user</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" title="" class="nav-link nav-toggle">
                <span class="fa fa-cubes icon"></span>
                <span class="title">Khối giao diện</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?page=add_widget" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?page=list_widget" title="" class="nav-link">Danh sách khối</a>
                </li>
                <li class="nav-item">
                    <a href="?page=menu" title="" class="nav-link">Menu</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" title="" class="nav-link nav-toggle">
                <i class="fa fa-sliders" aria-hidden="true"></i>
                <span class="title">Slider</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?page=add_slider" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?page=list_slider" title="" class="nav-link">Danh sách slider</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" title="" class="nav-link nav-toggle">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                <span class="title">Media</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?page=list_media" title="" class="nav-link">Danh sách media</a>
                </li>
            </ul>
        </li>
    </ul>
</div>