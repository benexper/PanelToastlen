<div class="kuro-toast">
    <div class="toast-header">
        <span class="update-badge">YENİ</span>
        <h3>Güncelleme Duyurusu</h3>
        <span class="toast-close">&times;</span>
    </div>
    <div class="toast-body">
        <ul class="update-list">
            <li><span class="update-icon">🛡️</span> Panel koruması güçlendirildi</li>
            <li><span class="update-icon">🔒</span> Açıklara ek güvenlik önlemleri eklendi</li>
            <li><span class="update-icon">⏳</span> Süre uzatma artık panel içinden yapılabilecek</li>
        </ul>
        <div class="toast-footer">Anında süre uzatımı için hazırız!</div>
    </div>
</div>

<style>
.kuro-toast {
    background: #1a1a2e;
    border-left: 4px solid #4cc9f0;
    border-radius: 6px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    color: #fff;
    font-family: 'Segoe UI', Roboto, sans-serif;
    max-width: 320px;
    overflow: hidden;
    position: relative;
}

.toast-header {
    background: rgba(0,0,0,0.2);
    padding: 12px 15px;
    display: flex;
    align-items: center;
    border-bottom: 1px solid rgba(255,255,255,0.05);
}

.update-badge {
    background: #f72585;
    border-radius: 4px;
    color: white;
    font-size: 10px;
    font-weight: bold;
    padding: 2px 6px;
    margin-right: 10px;
    text-transform: uppercase;
}

.toast-header h3 {
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    flex-grow: 1;
}

.toast-close {
    cursor: pointer;
    font-size: 18px;
    opacity: 0.7;
    transition: opacity 0.2s;
}

.toast-close:hover {
    opacity: 1;
}

.toast-body {
    padding: 15px;
}

.update-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.update-list li {
    padding: 8px 0;
    display: flex;
    align-items: center;
    font-size: 13px;
    border-bottom: 1px dashed rgba(255,255,255,0.05);
}

.update-list li:last-child {
    border-bottom: none;
}

.update-icon {
    margin-right: 10px;
    font-size: 16px;
    width: 20px;
    text-align: center;
}

.toast-footer {
    margin-top: 12px;
    padding-top: 10px;
    font-size: 12px;
    text-align: center;
    color: #4cc9f0;
    font-style: italic;
    border-top: 1px solid rgba(76, 201, 240, 0.2);
}
</style>
