<?php
/**
 * Index template - fallback para todas as outras paginas.
 *
 * @package IEC_Welcome
 */

get_header(); ?>

<main id="main" role="main" style="padding: 140px 0 80px;">
    <div class="container" style="text-align:center;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="hero-title"><?php the_title(); ?></h1>
            <div style="margin-top:32px; color: var(--color-text-muted); max-width:700px; margin-left:auto; margin-right:auto;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; else : ?>
            <h1 class="hero-title">Pagina nao encontrada</h1>
            <p style="color: var(--color-text-muted); margin-top: 16px;">O conteudo que voce procura nao existe.</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="margin-top: 32px; display:inline-flex;">
                Voltar ao inicio
            </a>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
