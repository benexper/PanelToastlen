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
            display: flex;
            flex-direction: column;
            max-height: 90vh;
        }
        
        .popup-header {
            background: #d9534f;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        
        .popup-header h2 {
            font-size: 1.8rem;
        }
        
        .popup-body {
            padding: 25px;
            overflow-y: auto;
            flex-grow: 1;
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
        
        .version-info {
            background: #e7f5ff;
            border-left: 4px solid #228be6;
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
        }
        
        .continue-btn {
            background: #d9534f;
            color: white;
            border: none;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-align: center;
        }
        
        .continue-btn:hover {
            background: #c12e2a;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes zoomIn {
            from { transform: scale(0.9); }
            to { transform: scale(1); }
        }
        
        ul {
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Direkt Açılan Popup -->
    <div class="emergency-popup">
        <div class="popup-content">
            <div class="popup-header">
                <h2><i class="fas fa-exclamation-triangle"></i> ÖNEMLİ DUYURU</h2>
            </div>
            <div class="popup-body">
                <!-- Fiyat Güncellemesi -->
                <div class="announcement">
                    <h3><i class="fas fa-money-bill-wave"></i> FİYAT GÜNCELLEMESİ</h3>
                    <div class="price-update">
                        <p><strong>YENİ FİYAT:</strong> Artık aylık panel ücreti <strong style="color: #d9534f;">120 TL</strong>'dir.</p>
                        <p>Eski fiyatlar geçersiz olup, tüm kullanıcılarımız yeni fiyat üzerinden işlem yapmak zorundadır.</p>
                    </div>
                </div>
                
                <!-- Versiyon Kontrol Sistemi -->
                <div class="announcement">
                    <h3><i class="fas fa-code-branch"></i> VERSİYON KONTROL SİSTEMİ</h3>
                    <div class="version-info">
                        <p><strong>Yeni versiyon kontrol sistemi sayesinde:</strong></p>
                        <ul>
                            <li>V3 modunuz çıktığında V1/V2 modlarını kapatabilirsiniz</li>
                            <li>Kullanıcıları yeni versiyona zorunlu güncellemeye zorlayabilirsiniz</li>
                            <li>Ban ve güvenlik sorunları önemli ölçüde azalacaktır</li>
                            <li>Eski versiyonların kapatılması sistem stabilitesini artırır</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Yeni Özellikler -->
                <div class="announcement">
                    <h3><i class="fas fa-star"></i> DİĞER YENİLİKLER</h3>
                    <ul>
                        <li><strong>Anahtar Yönetimi:</strong> Anahtarların fiyatını uzaktan belirleme ve süre ekleme/silme</li>
                        <li><strong>Gelişmiş Panel:</strong> Kullanıcı dostu yeni arayüz ve yönetim araçları</li>
                        <li><strong>Güvenlik:</strong> Geliştirilmiş koruma sistemleri ve ban önleme mekanizmaları</li>
                        <li><strong>Raporlama:</strong> Detaylı kullanım istatistikleri ve log kayıtları</li>
                    </ul>
                </div>
            </div>
            <button class="continue-btn" onclick="document.querySelector('.emergency-popup').style.display='none'">
                DEVAM ET <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <script>
        // Sayfa yüklendiğinde popup'ı göster
        window.addEventListener('load', function() {
            document.querySelector('.emergency-popup').style.display = 'flex';
        });
        
        // ESC tuşuyla kapatma
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelector('.emergency-popup').style.display = 'none';
            }
        });
    </script>
</body>
</html>
