<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function nbmz_setup() {
	load_theme_textdomain( 'nbmz', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );


	add_theme_support( 'title-tag' );



	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'nbmz_setup' );

add_theme_support('post-thumbnails');


// Регистрация кастомного типа записи "Команда"
function register_team_post_type() {
    register_post_type('team_member', [
        'labels' => [
            'name' => 'Команда',
            'singular_name' => 'Участник команды',
            'add_new' => 'Добавить участника',
            'add_new_item' => 'Добавить нового участника',
            'edit_item' => 'Редактировать участника',
            'new_item' => 'Новый участник',
            'view_item' => 'Посмотреть участника',
            'search_items' => 'Найти участника',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'team'],
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'menu_icon' => 'dashicons-groups', // Иконка в админке
    ]);

    // Регистрация таксономии для разделов команды
    register_taxonomy('team_category', 'team_member', [
        'labels' => [
            'name' => 'Разделы команды',
            'singular_name' => 'Раздел команды',
            'search_items' => 'Найти раздел',
            'all_items' => 'Все разделы',
            'edit_item' => 'Редактировать раздел',
            'add_new_item' => 'Добавить новый раздел',
        ],
        'hierarchical' => true, // Включить древовидную структуру
        'show_admin_column' => true,
        'rewrite' => ['slug' => 'team-category'],
    ]);
}
add_action('init', 'register_team_post_type');

add_theme_support( 'menus' );

