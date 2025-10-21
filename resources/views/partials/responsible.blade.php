<section class="responsible-section hidden-element" id="responsible">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Responsável</h2>
            <p>Conheça o titular da Controladoria Geral do Município</p>
        </div>
        @if($responsible)
            <div class="responsible-card">
                <div class="responsible-info">
                    <div class="info-item">
                        <span class="info-label">Nome:</span>
                        <span class="info-value">{{ $responsible->name }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Função:</span>
                        <span class="info-value">{{ $responsible->role }}</span>
                    </div>
                    <div class="info-item full-width">
                        <span class="info-label">Sobre:</span>
                        <div class="info-content">
                            <p class="about-text">{{ $responsible->about }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="no-data">
                <p>Informações do responsável serão disponibilizadas em breve.</p>
            </div>
        @endif
    </div>
</section>
