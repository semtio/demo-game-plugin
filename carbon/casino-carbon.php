<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_plugin_options');
function crb_attach_plugin_options()
{
    // РОДИТЕЛЬСКОЕ МЕНЮ
    Container::make('theme_options', 'Demo-Game')
        ->set_page_menu_title('Demo-Game')
        ->set_page_file('crb_demo_game')
        ->add_fields([Field::make('html', 'demo_info_block')->set_html('<h3>Это контейнер-прокладка. </br> Без него ни как только скрывать.</br> Сюда лучше выводить какую то полезную информацию или функции. </br> </br> Позже, что-то придумаем... </br> Перейдите ко следующим вкладкам для работы </h3>')]);

    // СТРАНИЦА 1 — Demo
    Container::make('theme_options', 'Demo')
        ->set_page_parent('crb_demo_game')
        ->add_fields([
            // Фон картинка
            Field::make('image', 'blur_img', __('Блюр-Фон (blur_img)'))
                ->set_value_type('url')
                ->set_width(33),
            // Высота
            Field::make('text', 'height_for', __('Высота окна (height_for)'))
                ->set_width(33),

            // Кнопка 1
            Field::make('text', 'btn_to_go', __('Кнопка перехода (btn_to_go)'))
                ->set_width(50),
            Field::make('text', 'btn_to_go_link', __('Ссылка перехода (btn_to_go_link)'))
                ->set_width(50),

            // Кнопка ЦВЕТ #1
            Field::make('color', 'btn_color_1', __('Кнопка #1 (btn_color_1)'))
                ->set_width(33)
                ->set_default_value('#FF7A00'),
            Field::make('color', 'btn_color_2', __('Кнопка #1 (btn_color_2)'))
                ->set_width(33)
                ->set_default_value('#FF002B'),
            Field::make('color', 'color_font_1', __('Цвет шрифта #1 (color_font_1)'))
                ->set_width(33)
                ->set_default_value('#ffffff'),

            // Кнопка 2
            Field::make('text', 'btn_iframe', __('Кнопка Iframe (btn_iframe)'))
                ->set_width(50),
            Field::make('text', 'btn_iframe_link', __('Ссылка Iframe (btn_iframe_link)'))
                ->set_width(50),

            // Кнопка ЦВЕТ #2
            // Field::make('separator', 'sep2', 'Кнопки 2'),
            Field::make('color', 'btn_color_3', __('Кнопка #2 (btn_color_3)'))
                ->set_width(33)
                ->set_default_value('#ffd700'),
            Field::make('color', 'btn_color_4', __('Кнопка #2 (btn_color_4)'))
                ->set_width(33)
                ->set_default_value('#ffd700'),
            Field::make('color', 'color_font_2', __('Цвет шрифта #2 (color_font_2)'))
                ->set_width(33)
                ->set_default_value('#000000'),

            // Кнопка назад
            Field::make('text', 'btn_back_to', __('Кнопка назад (btn_back_to)'))
        ]);

    // СТРАНИЦА 2 — Таблица казино
    Container::make('theme_options', 'Таблица казино')
        ->set_page_parent('crb_demo_game')
        ->add_fields([]);
}

add_action('after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});
