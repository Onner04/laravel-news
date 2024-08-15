@extends('master')
@section('home')
<div class="content-wrapper">
    <div class="container">
        <div class="slide">
            <div class="slide-move">
                @foreach($slide as $value)
                    <div class="slide-move__item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{ $value->link }}" target="_blank" class="slide-move__item-link">
                            <img class="slide-move__item-img" src="{{ url('images') }}/{{ $value->image }}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="slide-next">
                <span class="slide-up"><i class="ti-angle-right"></i></span>
                <span class="slide-back"><i class="ti-angle-left"></i></span>
            </div>
        </div>

        <div class="news">
                <div class="news-box">
                    
                    <div class="news-box-feature">
                        <div class="news-box-feature__img">
                            <img src="./assest/img/2-14.jpg" alt="" class="news-box-feature__img-item">
                        </div>
                        <div class="news-box-feature__content">
                            <h2 class="news-box-feature__content-title">Skin Airi bạch Kiamono đẹp nhất</h2>
                            <p class="news-box-feature__content-describe">
                                [ RA MẮT SKIN AIRI BẠCH KIEMONO TRONG TÍNH NĂNG VẼ BÙA ]
                                <br>
                                 Tính năng này sẽ xuất hiện ngay sau khi phiên bản Mùa đông kỳ thú ra mắt, và là phương thức duy nhất ở hiện tại để sở hữu được trang phục hot - Airi Bạch Kiemono.
                            </p>
                        </div>
                    </div>
                    <div class="news-box-depend">
                        <ul class="news-box-depend__list">
                            @foreach($new as $value)
                            <li class="news-box-depend__list-child">
                                <h3 class="news-box-depend__list-child-title">
                                    {{ $value ->title}} 
                                </h3>
                                <img src="{{url('images')}}/{{ $value->image}}" alt="" class="news-box-depend__list-child-img">
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="news-time">
                    <div class="news-time-status">
                        <p class="news-time-status__content">Tin mới nhất</p>
                    </div>
                    <ul class="news-time-list">
                        @foreach($new as $value)
                        <li class="news-time-list-child">
                            <img src="{{ url('images')}}/{{ $value->image}}" alt="" class="news-time-list-child__img">
                            <p class="news-time-list-child__content">
                                {{ $value-> title}}
                            </p>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
           </div>

    </div>
</div>
@stop