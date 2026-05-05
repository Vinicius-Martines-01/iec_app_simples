<?php
/**
 * Theme functions and setup
 *
 * @package IEC_Welcome
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Forçar a nova porta (8090) no banco de dados
update_option( 'siteurl', 'http://localhost:8090' );
update_option( 'home', 'http://localhost:8090' );

// ===================== THEME SETUP =====================
function iec_welcome_setup() {
    // Suporte a features do WordPress
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Registrar menus
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'iec-welcome' ),
    ) );
}
add_action( 'after_setup_theme', 'iec_welcome_setup' );

// ===================== ENQUEUE SCRIPTS & STYLES =====================
function iec_welcome_enqueue() {
    // Estilo principal (com header do tema)
    wp_enqueue_style(
        'iec-welcome-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Estilo da página de boas-vindas
    wp_enqueue_style(
        'iec-welcome-page',
        get_template_directory_uri() . '/assets/css/welcome.css',
        array( 'iec-welcome-style' ),
        '1.0.0'
    );

    // Script principal
    wp_enqueue_script(
        'iec-welcome-js',
        get_template_directory_uri() . '/assets/js/welcome.js',
        array(),
        '1.0.0',
        true // no footer
    );

    // Passar dados do WP para o JS
    wp_localize_script( 'iec-welcome-js', 'iecData', array(
        'siteUrl'  => get_site_url(),
        'themeUrl' => get_template_directory_uri(),
    ) );
}
add_action( 'wp_enqueue_scripts', 'iec_welcome_enqueue' );

// ===================== CUSTOMIZER =====================
function iec_welcome_customizer( $wp_customize ) {
    // Seção de boas-vindas
    $wp_customize->add_section( 'iec_welcome_section', array(
        'title'    => __( 'Pagina de Boas-vindas', 'iec-welcome' ),
        'priority' => 30,
    ) );

    // Titulo Hero
    $wp_customize->add_setting( 'iec_hero_title', array(
        'default'           => 'Bem-vindo ao IEC',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'iec_hero_title', array(
        'label'   => __( 'Titulo Principal', 'iec-welcome' ),
        'section' => 'iec_welcome_section',
        'type'    => 'text',
    ) );

    // Subtitulo Hero
    $wp_customize->add_setting( 'iec_hero_subtitle', array(
        'default'           => 'Uma plataforma moderna, poderosa e elegante para o seu projeto.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'iec_hero_subtitle', array(
        'label'   => __( 'Subtitulo', 'iec-welcome' ),
        'section' => 'iec_welcome_section',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'iec_welcome_customizer' );
