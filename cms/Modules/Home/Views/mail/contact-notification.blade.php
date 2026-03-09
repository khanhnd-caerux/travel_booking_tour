<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yêu cầu Liên Hệ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 18px;
            color: #333;
            margin-bottom: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
        }

        .info-item {
            background-color: #f8f9fa;
            padding: 15px 20px;
            border-left: 4px solid #667eea;
            border-radius: 4px;
        }

        .info-item .label {
            font-weight: 600;
            color: #667eea;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
            display: block;
        }

        .info-item .value {
            color: #333;
            font-size: 16px;
            word-break: break-word;
        }

        .message-box {
            background-color: #fff3cd;
            border: 1px solid #ffc107;
            padding: 20px;
            border-radius: 4px;
            margin: 25px 0;
        }

        .message-box .label {
            font-weight: 600;
            color: #ff9800;
            font-size: 13px;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .message-box .value {
            color: #333;
            font-size: 15px;
            line-height: 1.8;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 30px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background-color: #e9ecef;
            color: #333;
        }

        .btn-secondary:hover {
            background-color: #dee2e6;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }

        .footer-text {
            color: #666;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .footer-links {
            font-size: 12px;
        }

        .footer-links a {
            color: #667eea;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 25px 0;
        }

        .status-badge {
            display: inline-block;
            background-color: #d4edda;
            color: #155724;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        @media (max-width: 600px) {
            .email-container {
                margin: 0;
                border-radius: 0;
            }

            .content {
                padding: 20px 15px;
            }

            .action-buttons {
                grid-template-columns: 1fr;
            }

            .header {
                padding: 20px 15px;
            }

            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>📬 Yêu Cầu Liên Hệ Mới</h1>
            <p>Bạn nhận được một yêu cầu từ khách hàng</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Xin chào <strong>Admin</strong>,
            </div>

            <p style="margin-bottom: 20px; color: #666;">
                Một khách hàng mới đã gửi yêu cầu liên hệ. Chi tiết thông tin dưới đây:
            </p>

            <div class="info-grid">
                <div class="info-item">
                    <span class="label">👤 Tên Khách Hàng</span>
                    <span class="value">{{ $data['full_name'] }}</span>
                </div>

                <div class="info-item">
                    <span class="label">📧 Email</span>
                    <span class="value">
                        <a href="mailto:{{ $data['email'] }}" style="color: #667eea; text-decoration: none;">
                            {{ $data['email'] }}
                        </a>
                    </span>
                </div>

                <div class="info-item">
                    <span class="label">📱 Điện Thoại / WhatsApp</span>
                    <span class="value">
                        <a href="tel:{{ $data['whats_app'] }}" style="color: #667eea; text-decoration: none;">
                            {{ $data['whats_app'] }}
                        </a>
                    </span>
                </div>

                <div class="info-item">
                    <span class="label">🌍 Quốc Gia / Địa Chỉ</span>
                    <span class="value">{{ $data['country'] }}</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="message-box">
                <span class="label">💬 Nội Dung Tin Nhắn</span>
                <span class="value">{{ $data['note'] }}</span>
            </div>

            <div class="divider"></div>

            <div style="margin: 20px 0; padding: 15px; background-color: #e7f3ff; border-left: 4px solid #2196F3; border-radius: 4px;">
                <strong style="color: #1976D2; font-size: 13px;">⚠️ TRẠNG THÁI:</strong>
                <p style="margin-top: 5px; color: #333; font-size: 14px;">
                    Yêu cầu này vừa mới được nhận và <span class="status-badge">Chưa xử lý</span>
                </p>
            </div>

            <div class="action-buttons">
                <a href="{{ url('/admin') }}" class="btn btn-primary">
                    ✓ Xem Chi Tiết
                </a>
                <a href="mailto:{{ $data['email'] }}" class="btn btn-secondary">
                    ↩️ Trả Lời Email
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-text">
                <strong>{{ config('app.name') }}</strong> - Hệ thống quản lý tour & đặt vé
            </div>
            <div class="footer-text" style="font-size: 12px; color: #999;">
                Đây là email tự động được gửi từ hệ thống. Vui lòng không trả lời email này.
            </div>
            <div class="footer-links">
                <a href="{{ url('/') }}">🏠 Trang Chủ</a>
                <a href="{{ url('/admin') }}">⚙️ Quản Lý</a>
                <a href="mailto:{{ config('mail.from.address') }}">✉️ Liên Hệ</a>
            </div>
            <div class="footer-text" style="margin-top: 15px; color: #ccc; font-size: 11px;">
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
