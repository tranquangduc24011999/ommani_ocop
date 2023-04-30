1. cài docker, docker-compose và clone project về
2. config database
	2.1 nếu đã có: điền thông tin database trên trong .env và phần db trong docker-compose.yml
	2.2 nếu chưa có : đẩy file init.sql vào thư mục /mysql
3. cấu hình php upload: trong file mysql/uploads.ini
4. cấu hình nginx trong nginx/conf.d/app.conf (có thể bỏ qua)
5. chạy docker create network ommanilife
6. chạy docker-compose up -d
7. docker-compose exec ocop composer install
8. sudo chmod -R 777 storage/*
9. sau khi hoàn thành test thử với port 80
