@extends('master')
@section('home')
<div class="content-wrapper">
<div class="news-detail-compact">
        <div class="news-detail">
            <h1 class="news-detail-title">
                {{$news->name->$value}}
            </h1>
    
            <div class="news-detail-author">
                
                <div class="news-detail-author__item">
                    <i class="fa-solid fa-user news-detail-author__item-icon"></i>
                    <a href="#" class="news-detail-author__item-name">Đào Thành</a>
                </div>
                <div class="news-detail-author__item-time">
                    <span class="news-detail-author__item-time-item">{{$news->created_at->$value}}</span>
                </div>
            </div>
    
            <div class="news-detail-share">
                <a href="#" class="news-detail-share-box box-face">
                    <i class="fa-brands fa-facebook news-detail-share-box__icon"></i>
                    <span class="news-detail-share-box__content">facebook</span>
                </a>
                <a href="#" class="news-detail-share-box box-insta">
                    <i class="fa-brands fa-instagram news-detail-share-box__icon"></i>
                    <span class="news-detail-share-box__content">instagram</span>
                </a>
                <a href="#" class="news-detail-share-box box-like">
                    
                    <i class="fa-regular fa-heart news-detail-share-box__icon"></i>
                    <span class="news-detail-share-box__content">Thích </span>
                </a>
            </div>
    
            <div class="news-detail-describle">
                <h3 class="news-detail-describle-item">
                    {{$news->title->$value}}
                </h3>
            </div>
    
            <div class="news-detail-content">
                <p class="news-detail-content-item">
                    {{$news->content->$value}}
                </p>
                <img src="./assest/img/lol-1.webp" alt="" class="news-detail-content-img">
                <p class="news-detail-content-item">
                    Tuy nhiên, ở LPL Mùa Hè 2024 sắp tới, giải đấu sẽ áp dụng hình thức cấm chọn mang tên "Fearless Mode". Cho ai chưa biết, đây là một hình thức khá giống Liên Quân Mobile, thường được áp dụng cho các cặp đấu từ BO3 trở lên. Trong hình thức này, tuyển thủ sẽ không thể lựa chọn những tướng đã xuất hiện ở ván đấu trước đó. Điều này được cho là làm tăng độ kịch tính trong các trận chuyên nghiệp, đồng thời buộc các tuyển thủ sẽ phải mở rộng bể tướng. Chưa kể, những cái tên ít cho đến gần như đã biến mất hoàn toàn như Garen, Volibear hay Fiddlestick... sẽ có dịp xuất hiện trở lại.
                </p>
                <img src="./assest/img/lol-2.webp" alt="" class="news-detail-content-img">
                <p class="news-detail-content-item">
                    Tuy nhiên, điều này có thể sẽ gây khó khăn cho các đội tuyển và Riot là nguyên nhân chính. Ai cũng biết, LMHT chưa từng là một tựa game cân bằng và luôn có những tướng, thông qua các bản cập nhật, sẽ mạnh hơn những tướng còn lại. Đơn cử như ở thời điểm hiện tại, K'Sante đang là vị tướng quá "bá đạo" ở Đường Trên và gần như không có cách nào khắc chế. Trong một ván đấu, với 10 lượt cấm và 10 lượt chọn chia đều cho mỗi bên, thì số lượng tướng "bay màu" sau ván đấu thứ nhất là rất lớn.            </p>
                <img src="./assest/img/lol-3.webp" alt="" class="news-detail-content-img">
    
                
            </div>
        </div>

    </div>
</div>
@stop