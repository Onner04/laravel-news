@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:88%">
<div class="child">
        <div class="child-header">
            <h2 class="child-header-content">Danh sách comment </h2>
        </div>
        <div class="child-box c-12">
            <div class="child-box-search" style="margin: 30px 20px;">
                <input type="text" placeholder="Search" >
                <a  href="#"><i class="fa-solid fa-magnifying-glass"></i></a >
            </div>
            <div class="child-box-body">
                <table class="table">
                    <thead>
                        <tr class="table-news">
                            <th>STT</th>
                            <th>ID người dùng</th>
                            <th>ID bài báo</th>
                            <th>Nội dung</th>                           
                            <th>Thời Gian</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động </th>
                        </tr>
                    </thead> 
                    </tbody>   
                        @foreach($comment as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td><span class="table-news-name">{{$value->id_user}}</span></td>
                                 <td><span class="table-news-title">{{$value->id_news}}</span></td>
                                <td><span class="table-news-category">{{$value->content}}</span></td>
                                <td><span>{{$value->created_at}}</span></td>
                                <td>
                                    @if($value->status == 1)
                                        <span class="label label-success">Xác Nhận</span>
                                    @else
                                         <span class="label label-danger">Chưa xác nhận</span>
                                    @endif
                                </td>
                                 <td>
                                    <input type="hidden" name="status" value="2">
                                    <button style="border:none;background: transparent;" type="submit" class="" title="Xác Nhận"><i style="color:#00a65a" class="fa fa-fw fa-check-circle"></i></button>
                                    <input type="hidden" name="status" value="2">
                                    <button style="border:none;background: transparent;" type="submit" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')" class="" title="Xóa"><i style="color: red;" class="fa-solid fa-trash"></i></button>            
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