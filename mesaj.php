<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    :root {
        --primary: #6c5ce7;
        --secondary: #a29bfe;
        --accent: #fd79a8;
        --text: #2d3436;
        --light: #f5f6fa;
        --dark: #2d3436;
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        font-family: 'Poppins', sans-serif;
        animation: fadeIn 0.3s ease-in-out;
    }

    .popup-container {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 15px;
        padding: 30px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        text-align: center;
        position: relative;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .popup-title {
        color: var(--primary);
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .popup-badge {
        background-color: var(--accent);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(253, 121, 168, 0.3);
    }

    .popup-content {
        color: var(--text);
        margin-bottom: 25px;
        line-height: 1.6;
    }

    .popup-content p {
        margin-bottom: 15px;
        font-size: 16px;
    }

    .popup-content strong {
        color: var(--primary);
        font-weight: 700;
    }

    .popup-highlight {
        background-color: rgba(108, 92, 231, 0.1);
        border-left: 4px solid var(--primary);
        padding: 12px;
        margin: 20px 0;
        border-radius: 0 8px 8px 0;
        font-weight: 600;
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .popup-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 25px;
        margin: 5px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        width: calc(100% - 10px);
        box-sizing: border-box;
    }

    .popup-button i {
        margin-right: 10px;
        font-size: 18px;
    }

    .popup-button:not(.continue-button) {
        background-color: var(--primary);
        color: white;
        border: none;
    }

    .popup-button:not(.continue-button):hover {
        background-color: #5649c0;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
    }

    .continue-button {
        background-color: var(--light);
        color: var(--text);
        border: 1px solid var(--secondary);
        margin-top: 10px;
    }

    .continue-button.disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .popup-badge {
        animation: pulse 2s infinite;
    }
</style>

<div class="popup-overlay" id="campaignPopup">
    <div class="popup-container">
        <h2 class="popup-title">ÖZEL KAMPANYA</h2>
        <div class="popup-badge">SINIRLI SÜRE!</div>
        <div class="popup-content">
            <p>1 müşteri getirene <strong>1 ADET KEY PANEL</strong> hediye!</p>
            <div class="popup-highlight">
                <i class="fas fa-gift"></i> 1 MÜŞTERİ = 1 ÜCRETSİZ PANEL
            </div>
            <p>Yeni müşterilerinizi bize yönlendirin, her yönlendirdiginiz müşterilerin satın alımında size 1 adet ücretsiz key panel hediye edelim!</p>
        </div>
        <a href="https://t.me/benexper" target="_blank" class="popup-button">
            <i class="fab fa-telegram"></i> KATILMAK İÇİN TIKLA
        </a>
        <button id="continueButton" class="popup-button continue-button disabled">
            DEVAM ET (<span id="countdown">1</span>)
        </button>
        <p style="font-size: 14px; margin-top: 15px; color: var(--text);">Kampanya süresi dolana kadar geçerlidir</p>
    </div>
</div>
