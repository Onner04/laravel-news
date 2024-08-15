@extends('admin.master')
@section('home')
<div class="content-wrapper" style="min-height: 500px; width:88%">
    <div class="body-add">
        <div class="body-add-content">
            <h1>Quản lý bài báo</h1>
        </div>

        <div class="body-add-box">
            <div class="body-add-box-content">
                <h3 class="box-content-title">Sửa bài viết</h3>
            </div>
            <div class="body-box-add-select">
                <p class="box-add-select-title">Tên bài báo</p>
                <input type="text" placeholder="Nhập tên bài báo" class="box-add-select-input">
            </div>
            <div class="body-box-add-select">
                <p class="box-add-select-title">Tên tiêu đề</p>
                <input type="text" placeholder="Nhập tiêu đề" class="box-add-select-input">
            </div>
            <div class="checkbox">
                <p>Thể loại</p>
                <input type="checkbox">giải trí
                <input type="checkbox">Xã hội
            </div>
            <div class="checkbox">
                <p>Loại báo</p>
                <input type="checkbox">game
                <input type="checkbox">âm nhạc 
            </div>
            <div class="upload">
                <p for="file-upload">Ảnh sản phẩm</p>
                <div class="imageFile" style="height:120px;width:100%;">
                  <label for="file-upload" class="custom-file-upload">
                    <img src="./img/nak.jpg" id="image" style="height:100%;border-radius:5px;"  alt="">
                  </label>
                </div>
                <p for="file-upload" style="margin-top:4px" class="custom-file">
                    <i class="fa-solid fa-upload"></i>
                    Chọn ảnh
                </p>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn ">Thêm mới</button>
              </div>
        </div>
        
    </div>
</div>
@stop