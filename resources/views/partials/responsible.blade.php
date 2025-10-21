<section class="responsible-section hidden-element" id="responsible">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Responsável</h2>
            <p>Conheça o titular da Controladoria Geral do Município</p>
        </div>
        @if($responsible)
            <div class="responsible-card">
                <div class="responsible-info">
                    <div class="info-row">
                        <span class="info-label">Nome:</span>
                        <span class="info-value">{{ $responsible->name }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Função:</span>
                        <span class="info-value">{{ $responsible->role }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Sobre:</span>
                        <span class="info-value about-text">{{ $responsible->about }}</span>
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
