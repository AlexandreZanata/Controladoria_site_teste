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
                    <span class="action-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg></span>
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
