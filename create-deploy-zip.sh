#!/bin/bash

# Script tạo file zip để deploy PWA & Push Notifications
# Loại bỏ các file không cần thiết

ZIP_NAME="travel_booking_pwa_deploy_$(date +%Y%m%d_%H%M%S).zip"
TEMP_DIR=$(mktemp -d)

echo "Tạo file zip deploy: $ZIP_NAME"
echo ""

# Copy các file/folder cần thiết
echo "📦 Copying files..."

# Public files
mkdir -p "$TEMP_DIR/public"
cp public/manifest.json "$TEMP_DIR/public/" 2>/dev/null
cp public/sw.js "$TEMP_DIR/public/" 2>/dev/null
cp -r public/pwa-icons "$TEMP_DIR/public/" 2>/dev/null

# Config
mkdir -p "$TEMP_DIR/config"
cp config/app.php "$TEMP_DIR/config/" 2>/dev/null

# Routes
mkdir -p "$TEMP_DIR/routes"
cp routes/api.php "$TEMP_DIR/routes/" 2>/dev/null

# Composer
cp composer.json "$TEMP_DIR/" 2>/dev/null
cp composer.lock "$TEMP_DIR/" 2>/dev/null || true

# CMS Modules
mkdir -p "$TEMP_DIR/cms/Modules"
cp -r cms/Modules/Admin "$TEMP_DIR/cms/Modules/" 2>/dev/null
mkdir -p "$TEMP_DIR/cms/Modules/Home/Controllers"
cp cms/Modules/Home/Controllers/HomeController.php "$TEMP_DIR/cms/Modules/Home/Controllers/" 2>/dev/null
mkdir -p "$TEMP_DIR/cms/Modules/Core/Views/layouts"
cp -r cms/Modules/Core/Views/layouts/backend "$TEMP_DIR/cms/Modules/Core/Views/layouts/" 2>/dev/null
cp -r cms/Modules/Core/Views/layouts/frontend "$TEMP_DIR/cms/Modules/Core/Views/layouts/" 2>/dev/null
mkdir -p "$TEMP_DIR/cms/Modules/Auth/Views"
cp cms/Modules/Auth/Views/login.blade.php "$TEMP_DIR/cms/Modules/Auth/Views/" 2>/dev/null

# Scripts
cp generate-vapid-keys.php "$TEMP_DIR/" 2>/dev/null || true

# Documentation
cp DEPLOY_CHANGES.md "$TEMP_DIR/" 2>/dev/null || true

# Tạo zip
cd "$TEMP_DIR"
zip -r "$ZIP_NAME" . > /dev/null
mv "$ZIP_NAME" "$OLDPWD/"

# Cleanup
cd "$OLDPWD"
rm -rf "$TEMP_DIR"

echo "✅ Hoàn thành!"
echo "📦 File zip: $ZIP_NAME"
echo ""
echo "📋 Danh sách file trong zip:"
unzip -l "$ZIP_NAME" | head -30


