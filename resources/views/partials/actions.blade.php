<section class="actions-section hidden-element" id="actions">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Nossas Ações</h2>
            <p>Conheça as principais áreas de atuação da Controladoria Geral do Município</p>
        </div>
        <div class="squares-container">
            @foreach($actions as $action)
                <div class="square">
                    <h3>{{ $action->title }}</h3>
                    <p>{{ $action->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
