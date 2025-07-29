<?php
// Veritabanı bağlantısı (gerekiyorsa)
// $db = new PDO("mysql:host=localhost;dbname=panel_db", "kullanici", "sifre");

// Duyuru verileri
$duyurular = [
    [
        'baslik' => 'Fiyat Güncellemesi',
        'icerik' => 'Panel fiyatları güncellenmiştir. Artık aylık ücret 120 TL\'dir.',
        'tarih' => '2023-11-15',
        'onem' => 'yuksek', // yuksek, orta, dusuk
        'ikon' => 'fa-money-bill-wave'
    ],
    [
        'baslik' => 'Yeni Özellikler Eklendi!',
        'icerik' => 'Versiyon kontrol eklendi. Anahtarların fiyatı uzaktan belirlenebilme, anahtar süresi ekleme/silme gibi yeni özellikler eklendi.',
        'tarih' => '2023-11-10',
        'onem' => 'yuksek',
        'ikon' => 'fa-star'
    ]
    
];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Duyuruları</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --yuksek-onem: #ff4757;
            --orta-onem: #ffa502;
            --dusuk-onem: #2ed573;
            --arkaplan: #f1f2f6;
            --kutu-arkaplan: #ffffff;
            --golge: 0 4px 6px rgba(0, 0, 0, 0.1);
            --text-color: #2f3542;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--arkaplan);
            color: var(--text-color);
            padding: 20px;
        }

        .duyuru-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #ff6b81;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            display: inline-block;
        }

        .header h1::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #ff6b81, #ffa502);
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }

        .duyuru-kart {
            background-color: var(--kutu-arkaplan);
            border-radius: 10px;
            box-shadow: var(--golge);
            padding: 25px;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 5px solid;
        }

        .duyuru-kart:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .duyuru-kart.yuksek {
            border-left-color: var(--yuksek-onem);
            animation: pulse 2s infinite;
        }

        .duyuru-kart.orta {
            border-left-color: var(--orta-onem);
        }

        .duyuru-kart.dusuk {
            border-left-color: var(--dusuk-onem);
        }

        .duyuru-baslik {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .duyuru-baslik i {
            font-size: 1.5rem;
            margin-right: 15px;
            color: inherit;
        }

        .duyuru-kart.yuksek .duyuru-baslik i {
            color: var(--yuksek-onem);
        }

        .duyuru-kart.orta .duyuru-baslik i {
            color: var(--orta-onem);
        }

        .duyuru-kart.dusuk .duyuru-baslik i {
            color: var(--dusuk-onem);
        }

        .duyuru-baslik h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .duyuru-icerik {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .duyuru-tarih {
            font-size: 0.9rem;
            color: #7f8c8d;
            text-align: right;
            font-style: italic;
        }

        .onem-etiket {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .yuksek .onem-etiket {
            background-color: var(--yuksek-onem);
            color: white;
        }

        .orta .onem-etiket {
            background-color: var(--orta-onem);
            color: white;
        }

        .dusuk .onem-etiket {
            background-color: var(--dusuk-onem);
            color: white;
        }

        .yeni-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #ff4757;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            animation: bounce 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 71, 87, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 71, 87, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 71, 87, 0);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .ozellik-listesi {
            margin-top: 15px;
            padding-left: 20px;
        }

        .ozellik-listesi li {
            margin-bottom: 8px;
            position: relative;
        }

        .ozellik-listesi li::before {
            content: '✓';
            color: #2ed573;
            font-weight: bold;
            position: absolute;
            left: -20px;
        }
    </style>
</head>
<body>
    <div class="duyuru-container">
        <div class="header">
            <h1><i class="fas fa-bullhorn"></i> Panel Duyuruları</h1>
        </div>

        <?php foreach ($duyurular as $index => $duyuru): ?>
            <div class="duyuru-kart <?php echo $duyuru['onem']; ?>">
                <?php if ($index < 2): ?>
                    <div class="yeni-badge">YENİ</div>
                <?php endif; ?>
                <span class="onem-etiket"><?php echo $duyuru['onem']; ?></span>
                
                <div class="duyuru-baslik">
                    <i class="fas <?php echo $duyuru['ikon']; ?>"></i>
                    <h2><?php echo $duyuru['baslik']; ?></h2>
                </div>
                
                <div class="duyuru-icerik">
                    <p><?php echo $duyuru['icerik']; ?></p>
                    
                    <?php if ($duyuru['baslik'] == 'Yeni Özellikler Eklendi!'): ?>
                        <ul class="ozellik-listesi">
                            <li>Versiyon kontrol sistemi eklendi</li>
                            <li>Anahtarların fiyatı uzaktan belirlenebilme</li>
                            <li>Anahtar süresi ekleme/silme özelliği</li>
                            <li>Gelişmiş yönetim paneli</li>
                            <li>Kullanıcı dostu arayüz iyileştirmeleri</li>
                        </ul>
                    <?php endif; ?>
                </div>
                
                <div class="duyuru-tarih">
                    <?php echo $duyuru['tarih']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        // Duyurulara tıklanabilirlik ekleme
        document.querySelectorAll('.duyuru-kart').forEach(kart => {
            kart.addEventListener('click', function() {
                // Burada duyuru detay sayfasına yönlendirme yapılabilir
                console.log('Duyuru seçildi: ' + this.querySelector('h2').textContent);
            });
        });

        // Yüksek önemli duyurular için ekstra efekt
        const yuksekOnemliDuyurular = document.querySelectorAll('.duyuru-kart.yuksek');
        
        yuksekOnemliDuyurular.forEach(duyuru => {
            duyuru.addEventListener('mouseenter', function() {
                this.style.animation = 'pulse 0.5s infinite';
            });
            
            duyuru.addEventListener('mouseleave', function() {
                this.style.animation = 'pulse 2s infinite';
            });
        });
    </script>
</body>
</html>
