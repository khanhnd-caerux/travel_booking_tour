# 🚀 HƯỚNG DẪN NHANH - DEPLOY LÊN HOSTING VIETTEL

## ⚡ CÁCH NHANH NHẤT (3 bước)

### 1️⃣ Tạo file zip để deploy

**Cách 1: Dùng script tự động (Khuyến nghị)**
```bash
./create-deploy-package.sh
```

**Cách 2: Tạo thủ công**
```bash
cd ..
zip -r travel_booking_tour.zip travel_booking_tour \
  -x "travel_booking_tour/.env" \
  -x "travel_booking_tour/node_modules/*" \
  -x "travel_booking_tour/vendor/*" \
  -x "travel_booking_tour/.git/*"
```

### 2️⃣ Upload và giải nén lên hosting

- Upload file zip lên hosting qua FTP/File Manager
- Giải nén trên server

### 3️⃣ Cấu hình trên server

```bash
# 1. Tạo .env từ .env.example
cp .env.example .env

# 2. Generate APP_KEY
php artisan key:generate

# 3. Cập nhật .env với thông tin:
#    - Database
#    - Mail (QUAN TRỌNG: QUEUE_CONNECTION=sync)
#    - APP_URL

# 4. Cài dependencies
composer install --no-dev --optimize-autoloader

# 5. Set permissions
chmod -R 775 storage bootstrap/cache

# 6. Chạy migrations
php artisan migrate --force

# 7. Cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📧 CẤU HÌNH EMAIL (QUAN TRỌNG!)

Trong file `.env` trên server, **BẮT BUỘC** phải có:

```env
QUEUE_CONNECTION=sync

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

**Lưu ý**: Nếu dùng Gmail, phải tạo App Password tại: https://myaccount.google.com/apppasswords

## 🧪 TEST EMAIL

Thêm vào `routes/web.php` để test:

```php
Route::get('/test-email', function() {
    try {
        Mail::raw('Test email', function ($message) {
            $message->to('your-email@gmail.com')->subject('Test');
        });
        return '✅ Email sent!';
    } catch (\Exception $e) {
        return '❌ Error: ' . $e->getMessage();
    }
});
```

Truy cập: `https://your-domain.com/test-email`

**⚠️ Nhớ xóa route test sau khi test xong!**

## 📚 TÀI LIỆU CHI TIẾT

- `DEPLOY_INSTRUCTIONS.md` - Hướng dẫn deploy chi tiết
- `EMAIL_ISSUE_ANALYSIS.md` - Phân tích vấn đề email
- `QUICK_FIX_GUIDE.md` - Hướng dẫn fix nhanh

## ✅ CHECKLIST

- [ ] Đã tạo file zip (không có .env, node_modules, vendor)
- [ ] Đã upload và giải nén lên server
- [ ] Đã tạo .env và cấu hình đúng
- [ ] Đã set `QUEUE_CONNECTION=sync`
- [ ] Đã cấu hình mail trong .env
- [ ] Đã chạy migrations
- [ ] Đã test email thành công
- [ ] Đã xóa route test


