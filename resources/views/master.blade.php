<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('assest')}}/css/all.css">
    <link rel="stylesheet" href="{{ url('assest')}}/css/all.min.css">
    <link rel="stylesheet" href="{{ url('assest')}}/css/all.min">
    <link rel="stylesheet" href="{{ url('fontend')}}/css/main.css">
    <link rel="stylesheet" href="{{ url('fontend')}}/css/base.css">
    @yield('main')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onnn</title>
</head>
<body>
    <div id="app">
        <div class="header">
            <div class="header-left">
                    <a href="#" class="header-left-logo">Tuổi Trẻ</a>
                </div>
                <div class="header-center">
                    <ul class="header-center-nav">
                        @foreach($category as $value)
                            <li class="header-center-nav__list">
                                <a href="#" class="header-center-nav__list-child">{{ $value->name }}</a>
                                <ul class="header-center-nav__list-menu">
                                    @foreach( $type->where('id_category', $value->id) as $value)
                                    
                                    <li class="header-center-nav__list-menu-child">
                                        <a href="#" class="nav__list-menu-child-link">{{ $value->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="header-search">
                    <input type="text" class="header-search-box" placeholder="Tìm kiếm ...">
                    <p class="header-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </p>
                </div>
            </div>
        </div>  
        
        <div class="app__container">
            @yield('home')
        </div>

        <div class="footer">
        <div class="grid">
                <div class="row">
                    <div class="col l-3 m-6 c-6 footer-link">
                        <div class="footer-content">
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6 footer-link">
                        <div class="footer-content">
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6 footer-link">
                        <div class="footer-content">
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                            <br>
                            <a href="#" class="footer-content__title">Trang chủ</a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6 footer-link">
                        <div>
                            <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59870.74047288433!2d106.29426976914313!3d20.303525271424775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313609e6afc39dbd%3A0x5f377ae3a349ae29!2zQ-G6p3UgxJBp4buHbiBCacOqbg!5e0!3m2!1svi!2s!4v1704191651177!5m2!1svi!2s"
                             width="100%"
                             height="300%"
                             style="border: 0;"
                             allowfullscreen=""
                             loading="lazy"
                             frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>

    <script src="{{ asset('fontend/js/main.js') }}"></script>
</body>
</html>