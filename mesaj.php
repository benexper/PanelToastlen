<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
    
    .campaign-notification {
        font-family: 'Inter', sans-serif;
        background: rgba(255, 255, 255, 0.95);
        border-left: 4px solid #8A2BE2;
        padding: 15px;
        margin: 20px 0;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        max-width: 500px;
        position: relative;
    }
    
    .campaign-notification h3 {
        color: #8A2BE2;
        font-size: 18px;
        font-weight: 600;
        margin: 0 0 10px 0;
    }
    
    .campaign-notification p {
        color: #333;
        font-size: 14px;
        line-height: 1.5;
        margin: 8px 0;
    }
    
    .campaign-notification .highlight {
        background: rgba(138, 43, 226, 0.1);
        padding: 8px 12px;
        border-radius: 6px;
        margin: 12px 0;
        font-weight: 500;
        display: inline-block;
    }
    
    .campaign-notification a {
        display: inline-block;
        background: #8A2BE2;
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        margin-top: 10px;
        transition: background 0.2s;
    }
    
    .campaign-notification a:hover {
        background: #7B1FA2;
    }
    
    .campaign-notification .telegram-icon {
        margin-right: 8px;
    }
    
    .campaign-notification .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 14px;
        color: #888;
        cursor: pointer;
    }
</style>

<div class="campaign-notification">
    <h3>Özel Kampanya</h3>
    <p>1 müşteri getirene <strong>1 adet Key Panel</strong> hediye!</p>
    <div class="highlight">1 MÜŞTERİ = 1 ÜCRETSİZ PANEL</div>
    <p>Yeni müşterilerinizi bize yönlendirin, her yönlendirdiğiniz müşteri için size 1 adet ücretsiz key panel hediye edelim.</p>
    <a href="https://t.me/benexper" target="_blank">
        <span class="telegram-icon">📢</span> Katılmak İçin Tıkla
    </a>
    <button class="close-btn">×</button>
</div>

<script>
    document.querySelector('.close-btn').addEventListener('click', function() {
        this.parentElement.style.display = 'none';
    });
</script>
