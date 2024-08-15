<div class="nav">
        <div class="nav-admin">
            <img src="./assest/img/admin.jpg" alt="" class="nav-admin__img">

            <div class="nav-admin__box">
                <div class="nav-admin__box-title">Tài Khoản Admin</div>
                <div class="nav-admin__box-status">
                    <i class="fa-solid fa-wifi  nav-admin__box-status-icon"></i>
                    <span class="nav-admin__box-status-content">Online</span>
                </div>
            </div>
        </div>
        <div class="nav-bar">
            <ul class="nav-bar-list">
                <li class="nav-bar-list-child nav-list-child-menu">
                <div class="nav-bar-list-child__content" >
                        <div class="box-select">

                            <div class="nav-bar-list-child__content-icon">
                                <i class="fa-solid fa-folder-open child__content-icon-img"></i>
                            </div>
                            <a href="#" class="nav-bar-list-child__content-title">Quản lý bài báo</a>
                        </div>
                        <div class="nav-bar-list-child__icon">
                            <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                        </div>
                    </div>
                    <ul class="nav-bar-list-child__content-box">
                        <li class="menu-list">
                            <a href="{{ route('news.index')}}">Tất cả bài báo</a>
                        </li>
                        <li class="menu-list">
                            <a href="{{route('news.add')}}">thêm bài báo</a>
                        </li>
                    </ul>
                    
                </li>
                <li class="nav-bar-list-child nav-list-child-select">
                    <div class="nav-bar-list-child__content ">
                        <div class="nav-bar-list-child__content-icon">
                            <i class="fa-solid fa-folder-open child__content-icon-img"></i>
                        </div>
                        <a href="{{route('comment.index')}}" class="nav-bar-list-child__content-title">Quản lý comment</a>
                    </div>
                   
                </li>
                <li class="nav-bar-list-child nav-list-child-menu">
                    <div class="nav-bar-list-child__content">
                        <div class="box-select">

                            <div class="nav-bar-list-child__content-icon">
                                <i class="fa-solid fa-folder-open child__content-icon-img"></i>
                            </div>
                            <a href="#" class="nav-bar-list-child__content-title">Quản lý thể loại</a>
                        </div>
                        <div class="nav-bar-list-child__icon">
                            <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                        </div>
                    </div>
                    <ul class="nav-bar-list-child__content-box">
                        <li class="menu-list">
                           <a href="{{route('category.index')}}">Tất cả thể loại</a>
                        </li>
                        <li class="menu-list">
                            <a href="{{route('category.add')}}">Thêm thể loại</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-bar-list-child nav-list-child-menu">
                    <div class="nav-bar-list-child__content" >
                        <div class="box-select">

                            <div class="nav-bar-list-child__content-icon">
                                <i class="fa-solid fa-folder-open child__content-icon-img"></i>
                            </div>
                            <a href="#" class="nav-bar-list-child__content-title">Quản lý loại báo</a>
                        </div>
                        <div class="nav-bar-list-child__icon">
                            <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                        </div>
                    </div>
                    <ul class="nav-bar-list-child__content-box">
                        <li class="menu-list">
                            <a href="{{route('type.index')}}">Tất cả loại báo</a>
                        </li>
                        <li class="menu-list">
                            <a href="{{route('type.add')}}">thêm loại báo</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-bar-list-child nav-list-child-menu">
                    <div class="nav-bar-list-child__content" >
                        <div class="box-select">

                            <div class="nav-bar-list-child__content-icon">
                                <i class="fa-solid fa-folder-open child__content-icon-img"></i>
                            </div>
                            <a href="#" class="nav-bar-list-child__content-title">Quản lý banner</a>
                        </div>
                        <div class="nav-bar-list-child__icon">
                            <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                        </div>
                    </div>
                    <ul class="nav-bar-list-child__content-box">
                        <li class="menu-list">
                            <a href="{{route('slide.index')}}">Tất cả banner</a>
                        </li>
                        <li class="menu-list">
                            <a href="{{route('slide.add')}}">thêm banner</a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-bar-list-child">
                    <div class="nav-bar-list-child__logout">
                        <div class="nav-bar-list-child__content-icon">
                            <i class="fa-solid fa-right-from-bracket child__content-icon-img"></i>
                        </div>
                        <div class="nav-bar-list-child__content-title">Đăng xuất</div>
                    </div>
                    
                </li>
            </ul>
        </div>
    </div>
    
    
