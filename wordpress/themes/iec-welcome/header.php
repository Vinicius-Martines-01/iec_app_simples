<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Orbs de fundo animados -->
<div class="bg-orbs" aria-hidden="true">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
</div>

<div class="site-wrapper">

    <!-- Header / Navegação -->
    <header id="site-header" class="site-header">
        <div class="container">
            <nav class="nav-inner" aria-label="<?php esc_attr_e( 'Navegação principal', 'iec-welcome' ); ?>">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>

                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <nav class="site-nav">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class'     => '',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                            'fallback_cb'    => false,
                        ) ); ?>
                    </nav>
                <?php else : ?>
                    <nav class="site-nav" aria-label="Links de navegação">
                        <a href="#features">Recursos</a>
                        <a href="#sobre">Sobre</a>
                        <a href="#contato">Contato</a>
                    </nav>
                <?php endif; ?>

                <a href="<?php echo esc_url( wp_login_url() ); ?>" class="nav-cta">
                    Acessar
                </a>
            </nav>
        </div>
    </header>
