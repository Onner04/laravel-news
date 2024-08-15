@extends('admin.master')
@section('home')
    <div class="content-wrapper"  style="min-height: 500px; width:88%;">
        <div class="child">
            <div class="child-header">
                <h2 class="child-header-content">Danh sách loại báo</h2>
            </div>
            <div class="child-box">
                <div class="child-box-header">
                    <a href="{{route('type.add')}}" class="child-box-header__add">+ Thêm loại báo</a>
                    <div class="child-box-header__search">
                        <input type="text" placeholder="Search">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>

                <div class="child-box-body">
                    <table class="table">
                        <tbody>
                            <tr class="table-news">
                                <th>STT</th>
                                <th>Tên loại</th>
                                <th>Mã Phân loại</th>                  
                                <th>Thời Gian</th>
                                <th>Trạng Thái</th>
                                <th>Hành Động </th>
                            </tr>
                            <tr>
                                @foreach($type as $value)
                                <td>{{$value->id}}</td>            
                                <td><span class="table-news-category">{{$value->name}}</span></td>
                                <td><span class="table-news-type">{{$value->id_category}}</span></td>
                                <td><span>{{$value->created_at}}</span></td>
                                <td>
                                        @if($value->status == 1)
                                            <span class="label label-success">Hiển thị</span>
                                        @else
                                            <span class="label label-danger">Đang ẩn</span>
                                        @endif
                                </td>                         
                                <td>
                                    <a href="{{route('type.update')}}" class="table-repair">Sửa</a>
                                    <a href="#" class="table-delete">Xóa</a>
                                </td>
                                @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop