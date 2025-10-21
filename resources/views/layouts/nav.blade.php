<nav class="main-nav">
    <div class="nav-container">
        <div class="nav-brand">
            <div class="logo">
                <h2>Controladoria</h2>
                <span>Município de Sorriso</span>
            </div>
        </div>

        <div class="nav-content">
            <ul class="nav-menu">
                @foreach($navLinks as $link)
                    <li class="nav-item">
                        <a href="{{ $link->url }}"
                           class="nav-link"
                           @if($link->new_tab) target="_blank" @endif>
                            <span class="link-text">{{ $link->text }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="nav-actions">
                <a href="#location" class="nav-action-link">
                    <span class="action-icon">📍</span>
                    <span class="action-text">Visite-nos</span>
                </a>
            </div>
        </div>

        <div class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
