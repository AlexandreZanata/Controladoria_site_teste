<section class="principles-section hidden-element" id="principles">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Nossos Princípios</h2>
            <p>Valores que orientam nosso trabalho e compromisso com a gestão pública</p>
        </div>
        <div class="grid-three-cols">

            @foreach($principles as $principle)
                <div class="card hidden-element">
                    <div class="card-number">
                        <img src="{{ asset($principle->icon_path) }}" alt="Ícone {{ $principle->title }}">
                    </div>
                    <h3>{{ $principle->title }}</h3>
                    <p>{{ $principle->description }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
