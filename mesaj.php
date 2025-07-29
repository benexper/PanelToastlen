<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÖNEMLİ DUYURU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .emergency-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }
        
        .popup-content {
            background: white;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transform: scale(0.9);
            animation: zoomIn 0.3s ease forwards;
        }
        
        .popup-header {
            background: #d9534f;
            color: white;
            padding: 15px 20px;
            text-align: center;
            position: relative;
        }
        
        .popup-header h2 {
            font-size: 1.8rem;
        }
        
        .popup-body {
            padding: 25px;
            max-height: 70vh;
            overflow-y: auto;
        }
        
        .announcement {
            margin-bottom: 25px;
        }
        
        .announcement h3 {
            color: #d9534f;
            margin-bottom: 15px;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
        }
        
        .announcement h3 i {
            margin-right: 10px;
        }
        
        .price-update {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
        }
        
        .price-update h4 {
            color: #856404;
            margin-bottom: 10px;
        }
        
        .features-list {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .features-list li {
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes zoomIn {
            from { transform: scale(0.9); }
            to { transform: scale(1); }
        }
        
        @media (max-width: 500px) {
            .popup-header h2 {
                font-size: 1.4rem;
            }
            
            .announcement h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Direkt Açılan Popup -->
    <div class="emergency-popup">
        <div class="popup-content">
            <div class="popup-header">
                <h2><i class="fas fa-exclamation-triangle"></i> ÖNEMLİ DUYURU</h2>
                <button class="close-btn" onclick="document.querySelector('.emergency-popup').style.display='none'">
                    &times;
                </button>
            </div>
            <div class="popup-body">
                <!-- Fiyat Güncellemesi -->
                <div class="announcement">
                    <h3><i class="fas fa-money-bill-wave"></i> FİYAT GÜNCELLEMESİ</h3>
                    <div class="price-update">
                        <h4>PANEL FİYATLARI DEĞİŞMİŞTİR!</h4>
                        <p><strong>Yeni fiyat: Aylık 120 TL</strong></p>
                        <p>Eski fiyatlar geçersizdir. Lütfen ödemelerinizi yeni fiyat üzerinden yapınız.</p>
                    </div>
                </div>
                
                <!-- Yeni Özellikler -->
                <div class="announcement">
                    <h3><i class="fas fa-star"></i> YENİ ÖZELLİKLER</h3>
                    <p>Sisteme yeni eklenen özellikler:</p>
                    
                    <ul class="features-list">
                        <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Versiyon kontrol sistemi</li>
                        <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Anahtar fiyatlarını uzaktan belirleme</li>
                        <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Anahtar süresi ekleme/silme</li>
                        <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Gelişmiş yönetim paneli</li>
                        <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Kullanıcı dostu arayüz</li>
                    </ul>
                    
                    <p style="margin-top: 20px; font-weight: bold;">
                        <i class="fas fa-info-circle" style="color: #17a2b8;"></i> 
                        Yeni özelliklerle ilgili sorularınız için destek ekibimizle iletişime geçebilirsiniz.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Popup'ı kapatmak için ESC tuşu
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelector('.emergency-popup').style.display = 'none';
            }
        });
        
        // Sayfa yüklendiğinde popup'ı göster
        window.addEventListener('load', function() {
            document.querySelector('.emergency-popup').style.display = 'flex';
        });
    </script>
</body>
</html>
