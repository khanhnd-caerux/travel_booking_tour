@component('mail::message')
# Yêu cầu Liên Hệ Mới

Bạn nhận được một yêu cầu liên hệ mới từ khách hàng.

@component('mail::panel')
**Thông Tin Khách Hàng:**

**Tên:** {{ $data['full_name'] }}

**Email:** {{ $data['email'] }}

**Điện thoại:** {{ $data['whats_app'] }}

**Quốc gia:** {{ $data['country'] }}

**Nội dung:** {{ $data['note'] }}
@endcomponent

@component('mail::button', ['url' => config('app.url') . '/admin'])
Xem chi tiết
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
