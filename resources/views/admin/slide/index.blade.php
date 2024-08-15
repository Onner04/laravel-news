@extends('admin.master')
@section('home')
<div class="content-wrapper"  style="min-height: 500px; width:88%;">
<div class="child">
        <div class="child-header">
            <h2 class="child-header-content">Danh sách banner </h2>
        </div>
        <div class="child-box">
            <div class="child-box-header">
                <a href="{{route('slide.add')}}" class="child-box-header__add">+ Thêm banner</a>
                <div class="child-box-header__search">
                    <input type="text" placeholder="Search">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </div>

            <div class="child-box-body">
                <table class="table">
                    <thead>
                        <tr class="table-news">
                            <th>STT</th>
                            <th>Tên banner</th>
                            <th>Ảnh</th>
                            <th>link</th>
                            <th>Thời Gian</th>
                            <th>Hành Động </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slide as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td><span class="table-news-name">{{$value->name}}</span></td>
                                <td class="table-img"><img src="{{ url('img')}}/{{$value->image}}" alt="" class="table-news-img"></td>
                                <td><span class="table-news-title">{{$value->link}}</span></td>
                                <td><span>{{$value->created_at}}</span></td>
                                <td>
                                    <a href="{{route('slide.update')}}" class="table-repair">Sửa</a>
                                    <a href="#" class="table-delete">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                           
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop