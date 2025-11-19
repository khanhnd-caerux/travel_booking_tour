#!/bin/bash

# Script để tạo package deploy, loại bỏ các file không cần thiết

echo "🚀 Đang tạo package deploy..."

# Lấy tên thư mục hiện tại
PROJECT_NAME=$(basename "$PWD")
PARENT_DIR=$(dirname "$PWD")
ZIP_NAME="${PROJECT_NAME}_deploy_$(date +%Y%m%d_%H%M%S).zip"

# Di chuyển ra thư mục cha
cd "$PARENT_DIR"

# Tạo file zip, loại trừ các file/thư mục không cần thiết
zip -r "$ZIP_NAME" "$PROJECT_NAME" \
  -x "$PROJECT_NAME/.env" \
  -x "$PROJECT_NAME/.env.backup" \
  -x "$PROJECT_NAME/node_modules/*" \
  -x "$PROJECT_NAME/vendor/*" \
  -x "$PROJECT_NAME/.git/*" \
  -x "$PROJECT_NAME/.gitignore" \
  -x "$PROJECT_NAME/storage/logs/*.log" \
  -x "$PROJECT_NAME/storage/logs/.gitignore" \
  -x "$PROJECT_NAME/.idea/*" \
  -x "$PROJECT_NAME/.vscode/*" \
  -x "$PROJECT_NAME/docker/*" \
  -x "$PROJECT_NAME/docker-compose.yml" \
  -x "$PROJECT_NAME/docker-compose.override.yml" \
  -x "$PROJECT_NAME/.DS_Store" \
  -x "$PROJECT_NAME/*/.DS_Store" \
  -x "$PROJECT_NAME/.phpunit.result.cache" \
  -x "$PROJECT_NAME/npm-debug.log" \
  -x "$PROJECT_NAME/yarn-error.log" \
  -x "$PROJECT_NAME/Homestead.json" \
  -x "$PROJECT_NAME/Homestead.yaml" \
  -x "$PROJECT_NAME/error_log" \
  -x "$PROJECT_NAME/public/error_log"

if [ $? -eq 0 ]; then
    echo "✅ Tạo package thành công: $ZIP_NAME"
    echo "📦 Kích thước: $(du -h "$ZIP_NAME" | cut -f1)"
    echo ""
    echo "📝 Các file đã được loại trừ:"
    echo "   - .env, .env.backup"
    echo "   - node_modules/"
    echo "   - vendor/"
    echo "   - .git/"
    echo "   - storage/logs/*.log"
    echo "   - docker files"
    echo ""
    echo "🚀 Bạn có thể upload file này lên hosting Viettel"
else
    echo "❌ Có lỗi xảy ra khi tạo package"
    exit 1
fi


