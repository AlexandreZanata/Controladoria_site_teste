<section class="awards-section hidden-element" id="awards">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Prêmios e Reconhecimentos</h2>
            <p>Destaques que comprovam nosso compromisso com a excelência na gestão pública</p>
        </div>
        <div class="awards-container">
            @foreach($awards as $award)
                <div class="award-item">
                    <a href="#modal-{{ $award->id }}" role="button" class="award-link">
                        <img src="{{ asset($award->image_path) }}" alt="{{ $award->title }}">
                    </a>

                    <!-- Modal para cada prêmio -->
                    <div class="modal-wrapper" id="modal-{{ $award->id }}">
                        <div class="modal-body">
                            <div class="modal-header">
                                <a href="#awards" role="button" class="close" aria-label="Fechar modal">X</a>
                            </div>
                            <div class="Text-Modal">
                                <h2>{{ $award->modal_title }}</h2>
                                <h1>{{ $award->modal_subtitle }}</h1>
                                <p>{{ $award->modal_description }}</p>
                            </div>
                        </div>
                        <a href="#awards" class="outside-trigger"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
