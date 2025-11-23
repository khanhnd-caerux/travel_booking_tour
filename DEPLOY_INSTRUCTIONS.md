# HƯỚNG DẪN DEPLOY LÊN HOSTING VIETTEL

## 📦 BƯỚC 1: CHUẨN BỊ CODE ĐỂ ZIP

### 1.1. Loại bỏ các file không cần thiết

Trước khi zip, đảm bảo các file sau KHÔNG có trong package:
- `.env` (file thực tế với thông tin nhạy cảm)
- `node_modules/` (sẽ cài lại trên server)
- `vendor/` (sẽ cài lại trên server)
- `.git/` (nếu có)
- `storage/logs/*.log` (log files)
- `.idea/`, `.vscode/` (IDE configs)
- `docker-compose.yml`, `docker/` (nếu không dùng Docker trên production)

### 1.2. Tạo file zip

**Trên Mac/Linux:**
```bash
# Di chuyển ra ngoài thư mục project
cd ..

# Tạo file zip (loại trừ các thư mục không cần)
zip -r travel_booking_tour.zip travel_booking_tour \
  -x "travel_booking_tour/.env" \
  -x "travel_booking_tour/node_modules/*" \
  -x "travel_booking_tour/vendor/*" \
  -x "travel_booking_tour/.git/*" \
  -x "travel_booking_tour/storage/logs/*.log" \
  -x "travel_booking_tour/.idea/*" \
  -x "travel_booking_tour/.vscode/*" \
  -x "travel_booking_tour/docker/*" \
  -x "travel_booking_tour/docker-compose.yml"
```

**Hoặc sử dụng script tự động:**
```bash
cd travel_booking_tour
chmod +x create-deploy-package.sh
./create-deploy-package.sh
```

## 🚀 BƯỚC 2: UPLOAD LÊN HOSTING VIETTEL

### 2.1. Upload file zip
- Upload file `travel_booking_tour.zip` lên hosting qua FTP hoặc File Manager
- Giải nén file zip trên server

### 2.2. Đặt đúng thư mục
- Đảm bảo các file Laravel ở đúng vị trí (thường là `public_html/` hoặc `www/`)
- File `public/index.php` phải có thể truy cập được từ web

## ⚙️ BƯỚC 3: CẤU HÌNH TRÊN SERVER

### 3.1. Tạo file .env

```bash
# Copy từ .env.example
cp .env.example .env

# Tạo APP_KEY mới
php artisan key:generate
```

### 3.2. Cập nhật file .env

Mở file `.env` và cập nhật các thông tin sau:

```env
# App Configuration
APP_NAME="Travel Booking Tour"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
APP_FORCE_SSL=true

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# ⚠️ QUAN TRỌNG: Queue phải là sync trên shared hosting
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

### 3.3. Cài đặt dependencies

```bash
# Cài đặt Composer dependencies
composer install --no-dev --optimize-autoloader

# Cài đặt NPM dependencies (nếu cần)
npm install --production
npm run production
```

### 3.4. Cấu hình permissions

```bash
# Đặt quyền cho storage và cache
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 3.5. Chạy migrations và optimize

```bash
# Chạy migrations
php artisan migrate --force

# Clear và cache config
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Optimize cho production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📧 BƯỚC 4: CẤU HÌNH EMAIL

### 4.1. Nếu dùng Gmail SMTP

1. **Bật 2-Step Verification** cho Gmail account
2. **Tạo App Password**:
   - Vào: https://myaccount.google.com/apppasswords
   - Chọn "Mail" và "Other (Custom name)"
   - Nhập tên: "Laravel Production"
   - Copy password 16 ký tự
   - Dùng password này làm `MAIL_PASSWORD` trong `.env`

### 4.2. Test email

Tạo route test tạm thời trong `routes/web.php`:

```php
Route::get('/test-email', function() {
    try {
        Mail::raw('Test email từ server Viettel', function ($message) {
            $message->to('your-test-email@gmail.com')
                    ->subject('Test Email từ Server');
        });
        return '✅ Email đã được gửi thành công!';
    } catch (\Exception $e) {
        return '❌ Lỗi: ' . $e->getMessage() . '<br><br>Chi tiết: <pre>' . $e->getTraceAsString() . '</pre>';
    }
})->middleware('web');
```

Truy cập: `https://your-domain.com/test-email`

**⚠️ QUAN TRỌNG**: Xóa route test này sau khi test xong!

## 🔍 BƯỚC 5: KIỂM TRA VÀ XỬ LÝ LỖI

### 5.1. Kiểm tra log

```bash
# Xem log Laravel
tail -f storage/logs/laravel.log

# Hoặc xem log PHP
tail -f /var/log/php_errors.log
```

### 5.2. Các lỗi thường gặp

**Lỗi: "Connection timeout"**
- Thử port 465 với SSL: `MAIL_PORT=465` và `MAIL_ENCRYPTION=ssl`
- Hoặc liên hệ Viettel để mở port

**Lỗi: "Authentication failed"**
- Kiểm tra lại username/password
- Nếu dùng Gmail, đảm bảo dùng App Password

**Lỗi: "Queue connection not found"**
- Đảm bảo `QUEUE_CONNECTION=sync` trong `.env`

**Lỗi: "Permission denied"**
- Chạy: `chmod -R 775 storage bootstrap/cache`

## ✅ CHECKLIST SAU KHI DEPLOY

- [ ] File `.env` đã được tạo và cấu hình đúng
- [ ] `APP_KEY` đã được generate
- [ ] `QUEUE_CONNECTION=sync` trong `.env`
- [ ] Database connection thành công
- [ ] Migrations đã chạy thành công
- [ ] Permissions cho storage đã đúng
- [ ] Config đã được cache
- [ ] Email test đã gửi thành công
- [ ] Route test đã được xóa
- [ ] Website hoạt động bình thường

## 📞 HỖ TRỢ

Nếu gặp vấn đề:
1. Kiểm tra file `EMAIL_ISSUE_ANALYSIS.md` để xem phân tích chi tiết
2. Kiểm tra file `QUICK_FIX_GUIDE.md` để xem hướng dẫn nhanh
3. Xem log tại `storage/logs/laravel.log`
4. Liên hệ bộ phận hỗ trợ Viettel nếu cần

## 🔒 BẢO MẬT

Sau khi deploy:
- [ ] Đảm bảo `APP_DEBUG=false` trong production
- [ ] Không commit file `.env` lên git
- [ ] Đặt `APP_FORCE_SSL=true` nếu có SSL
- [ ] Xóa các file test và route test
- [ ] Kiểm tra file permissions



