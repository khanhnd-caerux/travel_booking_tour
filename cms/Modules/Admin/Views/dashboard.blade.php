@extends('Core::layouts.backend.app', ['activePage' => __('dashboard') , 'titlePage' => __('Trang chủ quản trị')])
@section('js')
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlertFunction.js') }}"></script>
@if($newOrders > 0 || $newContacts > 0)
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Phát âm thanh khi có order/contact mới
    var audio = new Audio('{{ asset("sounds/notification.mp3") }}');
    audio.play().catch(function(e) {
        console.log('Không thể phát âm thanh tự động, cần tương tác người dùng');
    });
});
</script>
@endif
@endsection
@section('content')
<div class="container-fluid py-4">
      {{-- Thông báo mới --}}
      @if($newOrders > 0 || $newContacts > 0)
      <div class="row mb-4">
        <div class="col-12">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><i class="material-icons align-middle">notifications_active</i> Thông báo:</strong>
            @if($newOrders > 0)
              Có <strong>{{ $newOrders }}</strong> đơn hàng mới chưa xử lý.
              <a href="{{ route('admin.order.list') }}" class="alert-link">Xem ngay</a>
            @endif
            @if($newOrders > 0 && $newContacts > 0) | @endif
            @if($newContacts > 0)
              Có <strong>{{ $newContacts }}</strong> liên hệ mới chưa xử lý.
              <a href="{{ route('admin.contact.list') }}" class="alert-link">Xem ngay</a>
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
      @endif

      <div class="row">
        {{-- Tour Card --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">tour</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Số Tour đã tạo</p>
                <h4 class="mb-0">{{ $tourNumber }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>

        {{-- Order Card --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">shopping_cart</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Tổng đơn hàng</p>
                <h4 class="mb-0">{{ $totalOrders }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-warning text-sm font-weight-bolder">{{ $newOrders }} mới</span> | 
                <span class="text-success text-sm font-weight-bolder">{{ $processedOrders }} đã xử lý</span>
              </p>
            </div>
          </div>
        </div>

        {{-- Contact Card --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">email</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Tổng liên hệ</p>
                <h4 class="mb-0">{{ $totalContacts }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-warning text-sm font-weight-bolder">{{ $newContacts }} mới</span> | 
                <span class="text-success text-sm font-weight-bolder">{{ $processedContacts }} đã xử lý</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
