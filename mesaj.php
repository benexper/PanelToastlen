<div style="font-family: 'Poppins', sans-serif; max-width: 100%;">
    <div style="background: linear-gradient(135deg, #ff0000, #990000); color: white; padding: 15px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); border-left: 5px solid #ffcc00;">
        <h2 style="margin-top: 0; font-weight: 700; text-align: center; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
            ⚠️ ÖNEMLİ BAKIM DUYURUSU ⚠️
        </h2>
        
        <div style="background-color: rgba(255,255,255,0.15); padding: 12px; border-radius: 6px; margin: 10px 0;">
            <p style="margin-bottom: 5px; font-size: 16px; line-height: 1.5;">
                <span style="font-weight: 600; color: #ffcc00;">16.08.2025 Cumartesi</span> saat 
                <span style="font-weight: 600; color: #ffcc00;">22:00</span> ile 
                <span style="font-weight: 600; color: #ffcc00;">17.08.2025 Pazar</span> saat 
                <span style="font-weight: 600; color: #ffcc00;">02:00</span> arasında 
                <span style="font-weight: 600; text-decoration: underline;">önemli bir bakım çalışması</span> gerçekleştirilecektir.
            </p>
            
            <p style="margin: 10px 0 5px 0; font-size: 16px; line-height: 1.5;">
                Toplam <span style="font-weight: 600; color: #ffcc00;">4 saat</span> sürecek bu çalışma sırasında sistemde 
                <span style="font-weight: 600;">kesintiler yaşanabilir</span>.
            </p>
        </div>
        
        <div style="display: flex; justify-content: center; margin-top: 15px;">
            <div style="background-color: rgba(0,0,0,0.3); padding: 8px 15px; border-radius: 20px; display: inline-flex; align-items: center;">
                <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffcc00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
                <span style="font-size: 14px;">Lütfen işlemlerinizi bu saatler dışında yapın</span>
            </div>
        </div>
        
        <div style="margin-top: 15px; text-align: center; font-size: 13px; opacity: 0.8;">
            Anlayışınız için teşekkür ederiz.
        </div>
    </div>
    
    <script>
        // Animasyon efekti için
        document.addEventListener('DOMContentLoaded', function() {
            const announcement = document.querySelector('div[style*="background: linear-gradient"]');
            if (announcement) {
                // Başlangıçta küçük ve şeffaf yap
                announcement.style.transform = 'scale(0.95)';
                announcement.style.opacity = '0';
                
                // 0.3 saniye sonra büyüt ve görünür yap
                setTimeout(() => {
                    announcement.style.transition = 'all 0.3s ease-out';
                    announcement.style.transform = 'scale(1)';
                    announcement.style.opacity = '1';
                }, 300);
                
                // 5 saniyede bir titreme efekti ekle
                setInterval(() => {
                    announcement.style.animation = 'shake 0.5s';
                    setTimeout(() => {
                        announcement.style.animation = '';
                    }, 500);
                }, 15000);
            }
        });
    </script>
    
    <style>
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
        
        .blink {
            animation: blink-animation 1s steps(2, start) infinite;
        }
        
        @keyframes blink-animation {
            to { visibility: hidden; }
        }
    </style>
</div>
