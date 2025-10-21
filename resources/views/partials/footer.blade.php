<footer class="footer-section">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column">
                <h3>CONTROLADORIA GERAL <br> DO MUNICÍPIO</h3>
                <p>Garantindo a transparência e eficiência na gestão pública municipal.</p>
            </div>
            <div class="footer-column">
                <h4>Navegação</h4>
                <ul class="footer-links">
                    @foreach($navLinks as $link)
                        <li>
                            <a href="{{ $link->url }}"
                               @if($link->new_tab) target="_blank" @endif>
                                {{ $link->text }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-column">
                <h4>Contato</h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <strong>Endereço:</strong>
                        <span>{!! nl2br(e($settings['address']->value ?? 'Rua Eurico Dutra, Nº 72\nCentro, Sorriso - MT')) !!}</span>
                    </div>
                    <div class="contact-item">
                        <strong>E-mail:</strong>
                        <span>{{ $settings['email']->value ?? 'controladoria@sorriso.mt.gov.br' }}</span>
                    </div>
                    <div class="contact-item">
                        <strong>Horário:</strong>
                        <span>{{ $settings['hours']->value ?? 'das 07:00 às 13:00' }}</span>
                    </div>
                    @if(isset($settings['phone']))
                        <div class="contact-item">
                            <strong>Telefone:</strong>
                            <span>{{ $settings['phone']->value }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="footer-column">
                <h4>Transparência</h4>
                <ul class="footer-links">
                    @foreach($transparencyLinks as $link)
                        <li>
                            <a href="{{ $link->url }}"
                               @if($link->new_tab) target="_blank" @endif>
                                {{ $link->text }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Controladoria Geral do Município de Sorriso. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
