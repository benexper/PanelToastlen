<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelleme Bildirimi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .announcement-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            overflow: hidden;
            animation: fadeIn 0.8s ease-out;
        }
        
        .announcement-header {
            background: linear-gradient(to right, #8e44ad, #6c5ce7);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        
        .announcement-header h2 {
            font-size: 24px;
            margin-bottom: 5px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        
        .announcement-header p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .announcement-badge {
            position: absolute;
            top: -15px;
            right: -15px;
            background: #e74c3c;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 14px;
            transform: rotate(15deg);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }
        
        .announcement-content {
            padding: 30px;
        }
        
        .update-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .update-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(0, 0, 0, 0.1);
        }
        
        .update-icon {
            background: #8e44ad;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .update-text {
            flex: 1;
        }
        
        .update-text h3 {
            color: #2c3e50;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .update-text p {
            color: #7f8c8d;
            font-size: 14px;
            line-height: 1.5;
        }
        
        .telegram-cta {
            text-align: center;
            margin: 25px 0;
            padding: 20px;
            background: linear-gradient(to right, #0088cc, #00a8ff);
            border-radius: 12px;
            color: white;
        }
        
        .telegram-cta h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .telegram-cta p {
            margin-bottom: 20px;
            opacity: 0.9;
        }
        
        .telegram-button {
            display: inline-block;
            background: white;
            color: #0088cc;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .telegram-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        
        .telegram-button i {
            margin-right: 8px;
        }
        
        .announcement-footer {
            text-align: center;
            padding: 15px;
            background: #f8f9fa;
            color: #7f8c8d;
            font-size: 12px;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 576px) {
            .announcement-container {
                border-radius: 15px;
            }
            
            .announcement-header h2 {
                font-size: 20px;
            }
            
            .update-item {
                flex-direction: column;
                text-align: center;
            }
            
            .update-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="announcement-container">
        <div class="announcement-header">
            <h2>PANEL GÜNCELLEMESİ</h2>
            <p>Yeni özellikler ve iyileştirmeler</p>
            <div class="announcement-badge">YENİ</div>
        </div>
        
        <div class="announcement-content">
            <div class="update-item">
                <div class="update-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="update-text">
                    <h3>HTTP Canary Koruması Güçlendirildi</h3>
                    <p>Gelişmiş güvenlik önlemleri ile HTTP Canary saldırılarına karşı koruma mekanizması güçlendirildi.</p>
                </div>
            </div>
            
            <div class="update-item">
                <div class="update-icon">
                    <i class="fas fa-bug"></i>
                </div>
                <div class="update-text">
                    <h3>Hata Mesajları İyileştirildi</h3>
                    <p>Kullanıcı deneyimini artırmak için hata mesajları daha açıklayıcı ve anlaşılır hale getirildi.</p>
                </div>
            </div>
            
            <div class="telegram-cta">
                <h3>Yeni Source Kodunu Alın</h3>
                <p>Güncellemeleri kaçırmamak için bizi Telegram'dan takip edin</p>
                <a href="https://t.me/Benexper" class="telegram-button" target="_blank">
                    <i class="fab fa-telegram"></i> Telegram Kanalı
                </a>
            </div>
        </div>
        
        <div class="announcement-footer">
            <p>© 2023 KuroPanel - Tüm Hakları Saklıdır</p>
        </div>
    </div>
</body>
</html>
