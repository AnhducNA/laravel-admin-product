@extends('layouts.admin')

@section('content')
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        @include('layouts.sidebar')
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm người dùng</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <div class="form-group">
                            <label for="user">Họ và tên</label>
                            <input class="form-control" type="text" name="use_name" id="user">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <label for="password_confirm">Xác nhận mật khẩu</label>
                            <input class="form-control" type="password" name="password_confirm" id="password_confirm">
                        </div>


                        <div class="form-group">
                            <label for="">Nhóm quyền</label>
                            <select class="form-control" id="">
                                <option>Chọn quyền</option>
                                <option>Danh mục 1</option>
                                <option>Danh mục 2</option>
                                <option>Danh mục 3</option>
                                <option>Danh mục 4</option>
                            </select>
                        </div>
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection