# HƯỚNG DẪN KHẮC PHỤC NHANH VẤN ĐỀ EMAIL TRÊN HOSTING VIETTEL

## 🚀 GIẢI PHÁP NHANH NHẤT (5 phút)

### Bước 1: Cập nhật file `.env` trên hosting Viettel

Thêm hoặc sửa các dòng sau trong file `.env`:

```env
# Queue Configuration - QUAN TRỌNG!
QUEUE_CONNECTION=sync

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="HA GIANG BACKPACKER"
MAIL_TIMEOUT=60
```

### Bước 2: Nếu dùng Gmail

1. Bật 2-Step Verification cho Gmail
2. Tạo App Password:
   - Vào: https://myaccount.google.com/apppasswords
   - Chọn "Mail" và "Other (Custom name)"
   - Nhập tên: "Laravel App"
   - Copy password và dùng làm `MAIL_PASSWORD`

### Bước 3: Clear cache config

SSH vào server và chạy:
```bash
php artisan config:clear
php artisan cache:clear
```

### Bước 4: Test email

Tạo file test tạm thời `routes/web.php`:
```php
Route::get('/test-email', function() {
    try {
        Mail::raw('Test email từ Viettel hosting', function ($message) {
            $message->to('your-test-email@gmail.com')
                    ->subject('Test Email');
        });
        return '✅ Email đã được gửi thành công!';
    } catch (\Exception $e) {
        return '❌ Lỗi: ' . $e->getMessage();
    }
});
```

Sau đó truy cập: `https://your-domain.com/test-email`

## 🔧 NẾU VẪN KHÔNG ĐƯỢC

### Thử các cấu hình SMTP khác:

**Option 1: Gmail với SSL**
```env
MAIL_PORT=465
MAIL_ENCRYPTION=ssl
```

**Option 2: Sendmail (nếu SMTP bị chặn)**
```env
MAIL_MAILER=sendmail
```

**Option 3: SMTP của Viettel**
Liên hệ Viettel để lấy thông tin SMTP server của họ.

## 📋 CHECKLIST

- [ ] Đã đặt `QUEUE_CONNECTION=sync` trong `.env`
- [ ] Đã cấu hình đầy đủ thông tin SMTP
- [ ] Đã clear cache: `php artisan config:clear`
- [ ] Đã test email và thấy thành công
- [ ] Đã xóa route test sau khi test xong

## ⚠️ LƯU Ý QUAN TRỌNG

1. **QUEUE_CONNECTION=sync** là bắt buộc trên shared hosting
2. Nếu dùng Gmail, phải dùng App Password, không dùng mật khẩu thường
3. Port 25 thường bị chặn, nên dùng 587 (TLS) hoặc 465 (SSL)
4. Kiểm tra log tại `storage/logs/laravel.log` nếu có lỗi

## 🆘 CẦN HỖ TRỢ?

Xem file `EMAIL_ISSUE_ANALYSIS.md` để biết chi tiết hơn.


