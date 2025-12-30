<?php include 'includes/head.php'; ?>

<main>
    <!-- Contato Hero -->
    <section class="sobre-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav class="breadcrumb__nav" aria-label="Breadcrumb">
                <ol class="breadcrumb__list">
                    <li class="breadcrumb__item">
                        <a href="./" class="breadcrumb__link">Início</a>
                    </li>
                    <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">
                        Contato
                    </li>
                </ol>
            </nav>
            
            <div class="sobre-hero__content">
                <div class="section__header">
                    <h1 class="section__title">Entre em <span class="section__title--golden">Contato</span></h1>
                    <div class="section__divider"></div>
                    <p class="section__subtitle">Estamos prontos para ajudar você e sua família a proteger e otimizar seu patrimônio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section class="contato-form">
        <div class="container">
            <div class="contato-form__content">
                <div class="contato-form__info">
                    <h2 class="contato-form__title">Fale Conosco</h2>
                    <p class="contato-form__text">
                        Preencha o formulário ao lado e nossa equipe entrará em contato o mais breve possível. Você também pode nos contatar diretamente pelos canais abaixo.
                    </p>
                    
                    <div class="contato-form__contacts">
                        <div class="contato-form__contact-item">
                            <div class="contato-form__contact-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">WhatsApp</h3>
                                <a href="https://api.whatsapp.com/send/?phone=51995612572&text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20os%20serviços%20da%20Palladium." target="_blank" rel="noopener noreferrer" class="contato-form__contact-link">+55 (11) 99999-9999</a>
                            </div>
                        </div>
                        
                        <div class="contato-form__contact-item">
                            <div class="contato-form__contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">E-mail</h3>
                                <a href="mailto:contato@palladium.com.br" class="contato-form__contact-link">contato@palladium.com.br</a>
                            </div>
                        </div>
                        
                        <div class="contato-form__contact-item">
                            <div class="contato-form__contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">Atendimento</h3>
                                <p class="contato-form__contact-text">Atendemos em todo o Brasil</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contato-form__form-wrapper">
                    <form class="contato-form__form" id="contactForm">
                        <div class="contato-form__field">
                            <label for="nome" class="contato-form__label">Nome Completo *</label>
                            <input type="text" id="nome" name="nome" class="contato-form__input" required>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="email" class="contato-form__label">E-mail *</label>
                            <input type="email" id="email" name="email" class="contato-form__input" required>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="telefone" class="contato-form__label">Telefone/WhatsApp *</label>
                            <input type="tel" id="telefone" name="telefone" class="contato-form__input" required>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="assunto" class="contato-form__label">Assunto *</label>
                            <select id="assunto" name="assunto" class="contato-form__select" required>
                                <option value="">Selecione um assunto</option>
                                <option value="holding-familiar">Holding Familiar</option>
                                <option value="sessao-viabilidade">Sessão de Viabilidade</option>
                                <option value="seminario">Seminário</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="mensagem" class="contato-form__label">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" class="contato-form__textarea" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn--primary contato-form__submit">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contato">
        <div class="container">
            <div class="cta-section__content">
                <h2 class="cta-section__title">Pronto para proteger seu patrimônio?</h2>
                <p class="cta-section__text">
                    Entre em contato conosco e descubra como podemos ajudar você e sua família
                </p>
                <div class="cta-section__buttons">
                    <a href="/contato" class="btn btn--primary">Quero ser atendido</a>
                    <a href="https://api.whatsapp.com/send/?phone=51995612572&text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20os%20serviços%20da%20Palladium." target="_blank" rel="noopener noreferrer" class="btn btn--secondary">Falar no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Dúvidas <span class="section__title--golden">Frequentes</span></h2>
                <div class="section__divider"></div>
                <p class="section__subtitle">Encontre respostas rápidas e confiáveis para as principais dúvidas dos nossos clientes</p>
            </div>
            
            <div class="faq-section__list">
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">O que é uma holding familiar e por que considerar essa estrutura?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            Uma holding familiar é uma estrutura empresarial criada para gerir e proteger o patrimônio de uma família. Considera-se essa opção para proporcionar vantagens fiscais, proteção de ativos e facilitar a transição entre gerações.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">Quais são os benefícios do planejamento sucessório?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            O planejamento sucessório oferece benefícios significativos, como evitar conflitos familiares, minimizar a carga tributária na transferência de patrimônio e assegurar uma transição suave de ativos para as próximas gerações.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">Como a holding familiar ajuda na proteção de ativos?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            A holding familiar auxilia na proteção de ativos ao separar o patrimônio pessoal e empresarial, reduzindo riscos legais e proporcionando maior segurança financeira.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">Como escolher a melhor estratégia de holding para minha família?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            A escolha da estratégia de holding depende das metas e características específicas da família. Uma análise cuidadosa das necessidades e consultoria jurídica especializada podem orientar para a opção mais adequada.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">Quando devo começar o planejamento sucessório?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            O ideal é começar o planejamento sucessório o mais cedo possível, quando a família ainda está em uma fase estável. No entanto, é possível iniciar em qualquer momento, adaptando estratégias conforme as circunstâncias evoluem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const assunto = document.getElementById('assunto').value;
    const mensagem = document.getElementById('mensagem').value;
    
    // Formatar o telefone (remover caracteres não numéricos)
    const telefoneFormatado = telefone.replace(/\D/g, '');
    
    // Criar mensagem personalizada
    let mensagemWhatsApp = `Olá! Meu nome é ${nome}.\n\n`;
    mensagemWhatsApp += `E-mail: ${email}\n`;
    mensagemWhatsApp += `Telefone: ${telefone}\n\n`;
    mensagemWhatsApp += `Assunto: ${assunto}\n\n`;
    mensagemWhatsApp += `Mensagem:\n${mensagem}`;
    
    // Codificar para URL
    const mensagemEncoded = encodeURIComponent(mensagemWhatsApp);
    
    // Redirecionar para WhatsApp
    window.open(`https://api.whatsapp.com/send/?phone=51995612572&text=${mensagemEncoded}`, '_blank');
});
</script>

</body>
</html>

