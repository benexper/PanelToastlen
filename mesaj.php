<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Önemli Bakım Duyurusu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message-box {
            background-color: #ffcccc;
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            text-align: center;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .message-box h1 {
            color: #b30000;
            font-size: 1.8em;
            margin: 0;
        }
        .message-box p {
            color: #555;
            font-size: 1.2em;
            margin: 15px 0;
        }
        .message-box .important {
            font-weight: bold;
            color: #b30000;
        }
        .message-box .time {
            font-size: 1.4em;
            font-weight: bold;
            color: #0066cc;
        }
        .message-box:hover {
            transform: scale(1.05);
        }
        .telegram-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0088cc;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .telegram-link:hover {
            background-color: #0077b5;
        }
        .telegram-link i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Önemli Bakım Duyurusu</h1>
        <p>Sayın Kullanıcılarımız, sistem bakımı nedeniyle aşağıdaki tarihlerde kesinti yaşanabilecektir:</p>
        <p class="time">16.08.2025 Cumartesi 22:00 - 17.08.2025 Pazar 02:00</p>
        <p>Bakım çalışması toplamda <span class="important">4 saat</span> sürecektir. Bu süre zarfında erişim sağlayamayabilirsiniz.</p>
        <p>Anlayışınız için teşekkür ederiz.</p>
        <a href="https://t.me/Benexper" class="telegram-link" target="_blank">
            <i class="fab fa-telegram"></i> Detaylar için Telegram
        </a>
    </div>
</body>
</html>
