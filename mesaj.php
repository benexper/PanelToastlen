<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Güncellemesi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            border: 3px solid #8e44ad;
            position: relative;
            overflow: hidden;
        }
        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #8e44ad, #6c3483);
        }
        h4 {
            color: #8e44ad;
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        p {
            margin: 15px 0;
            line-height: 1.6;
            color: #333;
        }
        .warning {
            background-color: #fff4e6;
            border-left: 4px solid #ffa94d;
            padding: 15px;
            margin: 25px 0;
            border-radius: 4px;
            text-align: left;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(142, 68, 173, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(142, 68, 173, 0); }
            100% { box-shadow: 0 0 0 0 rgba(142, 68, 173, 0); }
        }
        .telegram-btn {
            display: inline-block;
            background: linear-gradient(135deg, #0088cc, #005580);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 136, 204, 0.3);
        }
        .telegram-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 136, 204, 0.5);
        }
        .telegram-btn:active {
            transform: translateY(1px);
        }
        .icon {
            margin-right: 8px;
            vertical-align: middle;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>PANEL GÜNCELLEMESİ</h4>
        <p><strong>HTTP CANARY KORUMASI GÜÇLENDİRİLDİ</strong></p>
        <p><strong>HATA MESAJLARI İYİLEŞTİRİLDİ</strong></p>
        <p><strong>YENİ SOURCE KODUNU TELEGRAM ADRESİMİZDEN İSTEYİN:</strong></p>
        
        <div class="warning">
            ⚠️ <span class="highlight">DİKKAT: TÜM PANEL SAHİPLERİ ACİL OLARAK TELEGRAM ÜZERİNDEN BİZE ULAŞSIN!</span> ⚠️
            <br>Önemli güncellemeler ve güvenlik önlemleri hakkında bilgi almak için lütfen hemen iletişime geçin.
        </div>
        
        <a href="https://t.me/Benexper" class="telegram-btn">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white">
                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.14.141-.259.259-.374.261l.213-3.053 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.136-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
            </svg>
            Telegram'dan Ulaş
        </a>
    </div>
</body>
</html>
