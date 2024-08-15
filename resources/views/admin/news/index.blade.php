<!-- resources/views/admin/news/index.blade.php -->
@extends('admin.master')

@section('home')
<div class="content-wrapper"  style="min-height: 500px; width:88%;">
    <div class="child">
        <div class="child-header">
            <h2 class="child-header-content">Danh sách bài báo </h2>
        </div>
        <div class="child-box">
            <div class="child-box-header">
                <a href="{{route('news.add')}}" class="child-box-header__add" >+ Thêm bài viết</a>
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
                            <th>Tên Báo</th>
                            <th>Tiêu Đề</th>
                            <th>Ảnh</th>
                            <th>Thể Loại</th>
                            <th>Loại Báo</th>
                            <th>Thời Gian</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động </th>
                        </tr>
                    </thead> 
                    <tbody>   
                        @foreach($news as $value)
                         <tr>
                                <td>{{$value->id}}</td>
                                <td><span class="table-news-name">{{$value->title }}</span></td>
                                <td><span class="table-news-title">{{$value->content}}</span></td>
                                <td class="table-img"><img src="{{url('img')}}/{{ $value->image}}" alt="" class="table-news-img" ></td>
                                <td><span class="table-news-category">{{$value->category}}</span></td>
                                <td><span class="table-news-type">{{$value->type}}</span></td>
                                <td><span>{{$value->created_at}}</span></td>
                                <td>
                                    @if($value->status==1)
                                    <span class="table-news-status  news-show">Hiển thị</span >
                                    @else
                                    <span class="table-news-status news-hidden">Đang ẩn</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('news.update')}}" class="table-repair">Sửa</a>
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
