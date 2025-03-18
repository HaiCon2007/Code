<?php
$token = "7558024824:AAHvU6n0CR8ZNtoXxDDfgy1QxYQ0Ofs7uJY";
$chat_id = "7341331866";
$message = urlencode("🔥 Test gửi tin nhắn không dùng cURL!");

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message";

// Dùng file_get_contents thay vì cURL
$response = file_get_contents($url);

if ($response === false) {
    echo "❌ Không thể kết nối đến Telegram!";
} else {
    echo "✅ Phản hồi từ Telegram:<br>";
    echo "<pre>" . print_r(json_decode($response, true), true) . "</pre>";
}
?>
