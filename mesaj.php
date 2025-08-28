<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACİL DURUM</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #000000, #2c3e50);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(231, 76, 60, 0.8);
            padding: 40px;
            max-width: 700px;
            width: 100%;
            text-align: center;
            border: 2px solid #e74c3c;
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
            background: linear-gradient(90deg, #e74c3c, #c0392b);
        }
        .warning {
            background-color: rgba(231, 76, 60, 0.2);
            border: 2px solid #e74c3c;
            padding: 25px;
            margin: 30px 0;
            border-radius: 8px;
            text-align: center;
            animation: pulse 1.5s infinite;
            font-size: 22px;
            line-height: 1.6;
        }
        @keyframes pulse {
            0% { 
                box-shadow: 0 0 0 0 rgba(231, 76, 60, 0.7);
                transform: scale(1);
            }
            70% { 
                box-shadow: 0 0 0 20px rgba(231, 76, 60, 0);
                transform: scale(1.02);
            }
            100% { 
                box-shadow: 0 0 0 0 rgba(231, 76, 60, 0);
                transform: scale(1);
            }
        }
        .telegram-btn {
            display: inline-block;
            background: linear-gradient(135deg, #0088cc, #005580);
            color: white;
            padding: 16px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            margin-top: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 136, 204, 0.5);
            border: 1px solid #0088cc;
        }
        .telegram-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 136, 204, 0.7);
        }
        .telegram-btn:active {
            transform: translateY(2px);
        }
        .icon {
            margin-right: 10px;
            vertical-align: middle;
        }
        .highlight {
            color: #ffdd00;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 221, 0, 0.5);
        }
        .urgent {
            display: block;
            font-size: 24px;
            margin-top: 15px;
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="warning">
            ⚠️ <span class="highlight">ACİL DURUM!</span> ⚠️
            <br>
            <span class="highlight">TÜM PANEL SAHİPLERİ</span>
            <br>
            ACİL OLARAK TELEGRAM ÜZERİNDEN BİZE ULAŞSIN!
            <span class="urgent">YENİ GÜNCELLEMELER HAKKINDA BİLGİ ALMAK İÇİN!</span>
        </div>
        
        <a href="https://t.me/Benexper" class="telegram-btn">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.14.141-.259.259-.374.261l.213-3.053 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.136-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
            </svg>
            Telegram'dan Ulaş
        </a>
    </div>
</body>
</html>
