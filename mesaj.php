<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Playfair+Display:wght@700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    :root {
        --purple: #8A2BE2;
        --pink: #FF1493;
        --light-pink: #FF69B4;
        --dark-purple: #6A0DAD;
        --text: #2E2E2E;
        --light: #F8F8FF;
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.85);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        font-family: 'Montserrat', sans-serif;
        animation: fadeIn 0.4s ease-out;
    }

    .popup-container {
        background: linear-gradient(145deg, #8A2BE2 0%, #FF1493 100%);
        border-radius: 20px;
        padding: 35px 30px;
        width: 90%;
        max-width: 480px;
        box-shadow: 0 15px 40px rgba(138, 43, 226, 0.5);
        text-align: center;
        position: relative;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .popup-title {
        color: white;
        font-size: 32px;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        font-family: 'Playfair Display', serif;
        letter-spacing: 1px;
    }

    .popup-badge {
        background-color: white;
        color: var(--pink);
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 700;
        display: inline-block;
        margin-bottom: 25px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .popup-content {
        color: white;
        margin-bottom: 30px;
        line-height: 1.7;
        font-size: 17px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    .popup-content p {
        margin-bottom: 18px;
    }

    .popup-content strong {
        color: white;
        font-weight: 700;
        text-decoration: underline;
    }

    .popup-highlight {
        background-color: rgba(255, 255, 255, 0.15);
        padding: 15px;
        margin: 25px 0;
        border-radius: 12px;
        font-weight: 700;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-size: 18px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .popup-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px 30px;
        margin: 8px 0;
        border-radius: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        width: 100%;
        box-sizing: border-box;
        background-color: white;
        color: var(--purple);
        font-size: 18px;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .popup-button i {
        margin-right: 12px;
        font-size: 20px;
    }

    .popup-button:hover {
        background-color: var(--light);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        color: var(--pink);
    }

    .popup-footer {
        font-size: 13px;
        margin-top: 20px;
        color: rgba(255,255,255,0.8);
        font-style: italic;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .popup-badge {
        animation: pulse 1.5s infinite;
    }

    .fa-gift {
        color: var(--pink);
        font-size: 24px;
    }
</style>

<div class="popup-overlay" id="campaignPopup">
    <div class="popup-container">
        <h2 class="popup-title">ÖZEL KAMPANYA</h2>
        <div class="popup-badge">Sınırlı Kontenjan!</div>
        <div class="popup-content">
            <p>1 müşteri getirene <strong>1 ADET KEY PANEL</strong> hediye!</p>
            <div class="popup-highlight">
                <i class="fas fa-gift"></i> 1 MÜŞTERİ = 1 ÜCRETSİZ PANEL
            </div>
            <p>Yeni müşterilerinizi bize yönlendirin, her yönlendirdiğiniz müşterinin satın alımında size 1 adet ücretsiz key panel hediye edelim!</p>
        </div>
        <a href="https://t.me/benexper" target="_blank" class="popup-button">
            <i class="fab fa-telegram"></i> KATILMAK İÇİN TIKLA
        </a>
        <p class="popup-footer">Kampanya süresi dolana kadar geçerlidir</p>
    </div>
</div>
