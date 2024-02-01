<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="{{ route('client.index') }}" target="_blank">
        <img src="{{asset('backend/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Administator</span>
    </a>
</div>
<hr class="horizontal light mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'dashboard') active bg-gradient-primary @endif"
                href="{{ route('admin.dashboard') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white  @if($activePage && $activePage == 'category') active bg-gradient-primary @endif"
                href="{{ route('admin.category.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">category</i>
                </div>
                <span class="nav-link-text ms-1">Danh mục</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'user') active bg-gradient-primary @endif"
                href="{{ route('admin.user.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                </div>
                <span class="nav-link-text ms-1">Tài khoản</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'setting') active bg-gradient-primary @endif"
                href="{{ route('admin.setting.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">settings</i>
                </div>
                <span class="nav-link-text ms-1">Cài đặt chung</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'slider') active bg-gradient-primary @endif"
                href="{{ route('admin.slider.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">photo_library</i>
                </div>
                <span class="nav-link-text ms-1">Slider & Hình ảnh</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'tour') active bg-gradient-primary @endif"
                href="{{ route('admin.tour.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">tour</i>
                </div>
                <span class="nav-link-text ms-1">Tour du lịch</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'car') active bg-gradient-primary @endif"
                href="{{ route('admin.car.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">directions_car</i>
                </div>
                <span class="nav-link-text ms-1">Thuê xe</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'ticket') active bg-gradient-primary @endif"
                href="{{ route('admin.ticket.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">confirmation_number</i>
                </div>
                <span class="nav-link-text ms-1">Vé xe</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'post') active bg-gradient-primary @endif"
                href="{{ route('admin.post.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">post_add</i>
                </div>
                <span class="nav-link-text ms-1">Bài viết</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'order') active bg-gradient-primary @endif"
                href="{{ route('admin.order.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">shopping_cart_checkout</i>
                </div>
                <span class="nav-link-text ms-1">Order</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($activePage && $activePage == 'contact') active bg-gradient-primary @endif"
                href="{{ route('admin.contact.list') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">call</i>
                </div>
                <span class="nav-link-text ms-1">Liên hệ</span>
            </a>
        </li>
    </ul>
</div>
