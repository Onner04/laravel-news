@extends('admin.master')
@section('home')
<div class="content-wrapper" style="min-height: 500px; width:88%">
    <div class="body-add">
        <div class="body-add-content">
            <h1>Quản lý phân loại</h1>
        </div>

        <div class="body-add-box">
            <div class="body-add-box-content">
                <h3 class="box-content-title">Thêm mới phân loại</h3>
            </div>
            <div class="body-box-add-select">
                <p class="box-add-select-title">Tên phân loại</p>
                <input type="text" placeholder="Nhập tên bài báo" class="box-add-select-input">
            </div>
            <div class="body-box-add-select">
                <p class="box-add-select-title"> tiêu đề</p>
                <input type="text" placeholder="Nhập tiêu đề" class="box-add-select-input">
            </div>      
            <div class="box-footer">
                <button type="submit" class="btn ">Thêm mới</button>
              </div>
        </div>
        
    </div>
</div>
@stop