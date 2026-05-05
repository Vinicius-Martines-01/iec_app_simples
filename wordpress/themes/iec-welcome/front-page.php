<?php
/**
 * Front Page Template
 * Exibida quando uma pagina estatica e definida como pagina inicial.
 *
 * @package IEC_Welcome
 */

get_header();

// Valores do customizer com fallbacks
$hero_title    = get_theme_mod( 'iec_hero_title', 'Bem-vindo ao IEC' );
$hero_subtitle = get_theme_mod( 'iec_hero_subtitle', 'Uma plataforma moderna, poderosa e elegante para o seu projeto.' );
?>

<main id="main" role="main">

    <!-- ========== HERO ========== -->
    <section class="hero" aria-labelledby="hero-heading">
        <div class="container">

            <div class="hero-badge">
                <span aria-hidden="true"></span>
                Plataforma Ativa
            </div>

            <h1 id="hero-heading" class="hero-title">
                <?php echo esc_html( $hero_title ); ?> <br>
                <span class="gradient-text">Comece agora.</span>
            </h1>

            <p class="hero-subtitle">
                <?php echo esc_html( $hero_subtitle ); ?>
            </p>

            <div class="hero-actions">
                <a href="<?php echo esc_url( wp_registration_url() ); ?>" class="btn btn-primary">
                    &#x1F680; Criar minha conta
                </a>
                <a href="#features" class="btn btn-outline">
                    Saber mais
                </a>
            </div>

        </div>
    </section>

    <div class="divider-line" aria-hidden="true"></div>

    <!-- ========== FEATURES ========== -->
    <section id="features" class="features" aria-labelledby="features-heading">
        <div class="container">

            <span class="section-tag">Recursos</span>
            <h2 id="features-heading" class="section-title">
                Tudo que voce precisa,<br>em um so lugar.
            </h2>
            <p class="section-subtitle">
                Ferramentas pensadas para facilitar o seu dia a dia com tecnologia de ponta.
            </p>

            <div class="features-grid">

                <article class="feature-card">
                    <div class="feature-icon feature-icon-1" aria-hidden="true">&#x26A1;</div>
                    <h3>Alto Desempenho</h3>
                    <p>Infraestrutura otimizada para entregar a melhor experiencia, com velocidade e estabilidade em qualquer carga.</p>
                </article>

                <article class="feature-card">
                    <div class="feature-icon feature-icon-2" aria-hidden="true">&#x1F512;</div>
                    <h3>Seguranca Avancada</h3>
                    <p>Seus dados protegidos com as mais modernas praticas de seguranca, autenticacao e monitoramento continuo.</p>
                </article>

                <article class="feature-card">
                    <div class="feature-icon feature-icon-3" aria-hidden="true">&#x1F3A8;</div>
                    <h3>Design Moderno</h3>
                    <p>Interface elegante e responsiva, desenvolvida com atencao aos detalhes para proporcionar a melhor experiencia visual.</p>
                </article>

            </div>
        </div>
    </section>

    <!-- ========== STATS ========== -->
    <section id="sobre" class="stats-section" aria-labelledby="stats-heading">
        <div class="container">
            <h2 id="stats-heading" class="screen-reader-text">Numeros do projeto</h2>
            <div class="stats-inner">
                <div class="stat">
                    <p class="stat-number" aria-label="100 porcento uptime">100%</p>
                    <p class="stat-label">Disponibilidade</p>
                </div>
                <div class="stat">
                    <p class="stat-number" aria-label="Zero brechas de seguranca">0</p>
                    <p class="stat-label">Brechas de Seguranca</p>
                </div>
                <div class="stat">
                    <p class="stat-number" aria-label="CI/CD automatizado">CI/CD</p>
                    <p class="stat-label">Automatizado</p>
                </div>
                <div class="stat">
                    <p class="stat-number">24/7</p>
                    <p class="stat-label">Monitoramento</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CTA ========== -->
    <section id="contato" class="cta-section" aria-labelledby="cta-heading">
        <div class="container">
            <div class="cta-box">
                <h2 id="cta-heading">Pronto para comecar?</h2>
                <p>Junte-se a nos e experimente uma nova forma de trabalhar com tecnologia e inovacao.</p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( wp_registration_url() ); ?>" class="btn btn-primary">
                        &#x1F44B; Criar conta gratuita
                    </a>
                    <a href="<?php echo esc_url( wp_login_url() ); ?>" class="btn btn-outline">
                        Ja tenho uma conta
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
