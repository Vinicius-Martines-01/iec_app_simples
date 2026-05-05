    <!-- Footer -->
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-inner">
                <span class="footer-logo"><?php bloginfo( 'name' ); ?></span>

                <p class="footer-copy">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.
                    <?php esc_html_e( 'Todos os direitos reservados.', 'iec-welcome' ); ?>
                </p>

                <nav class="footer-links" aria-label="<?php esc_attr_e( 'Links do rodape', 'iec-welcome' ); ?>">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
                    <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacidade</a>
                    <a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Contato</a>
                </nav>
            </div>
        </div>
    </footer>

</div><!-- .site-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
