<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// lưu anh hoàng pờ rồ cháu Bác Hồ Việt Nam
require 'vendor/autoload.php';

$Lah_mail = new PHPMailer(true);

try {
    $Lah_mail->isSMTP();
    $Lah_mail->Host = 'smtp.gmail.com';
    $Lah_mail->SMTPAuth = true;
    $Lah_mail->Username = 'luuanhhoangdvfb.vpbq@gmail.com'; //email
    $Lah_mail->Password = ''; // password 
    $Lah_mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $Lah_mail->Port = 465;


    $Lah_mail->setFrom('luuanhhoangdvfb.vpbq@gmail.com', 'Lưu Anh Hoàng');
    $Lah_mail->addAddress('', '');

    $Lah_mail->isHTML(true);
    $Lah_mail->Subject = 'test thư gửi';
    $Lah_mail->Body    = 'Test code thử .';
    $Lah_mail->AltBody = 'Test code tự động gửi tin nhắn.';

    $Lah_mail->send();
    echo 'Email đã được gửi thành công!';
} catch (Exception $e) {
    echo "Không thể gửi email. Lỗi: {$Lah_mail->ErrorInfo}";
}
?>
