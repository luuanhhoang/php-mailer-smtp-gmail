# php-mailer-smtp-gmail
dự án để học tập vui lòng không sử dụng để kinh doanh! thân ái
# PHP SMTP Email Sender

Dự án này là một ví dụ đơn giản về cách sử dụng PHPMailer để gửi email qua SMTP của Gmail trong PHP.

## Yêu cầu
- PHP >= 7.2
- Tài khoản Gmail
- [Composer](https://getcomposer.org/) để cài đặt PHPMailer

## Hướng dẫn sử dụng

1. Clone repo này về máy của bạn:
   ```bash
   git clone https://github.com/yourusername/php-smtp-email-sender.git
   cd php-smtp-email-sender
Cài đặt PHPMailer qua Composer:

bash
Sao chép mã
composer require phpmailer/phpmailer
Mở tệp send_email.php và cập nhật thông tin sau:

php
Sao chép mã
$mail->Username = 'YOUR_GMAIL_EMAIL@gmail.com'; // Thay bằng địa chỉ email của bạn
$mail->Password = 'YOUR_APP_PASSWORD'; // Thay bằng Mật khẩu ứng dụng bạn vừa tạo
Chạy đoạn mã PHP để gửi email. Bạn có thể chạy trực tiếp qua dòng lệnh hoặc trên server PHP:

bash
Sao chép mã
php send_email.php
Nếu cấu hình đúng, bạn sẽ thấy thông báo "Email đã được gửi thành công!" trên màn hình.
