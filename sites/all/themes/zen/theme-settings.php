<?php

// Include the definition of zen_theme_get_default_settings().
include_once './'.drupal_get_path('theme', 'zen').'/zen-internals/template.theme-registry.inc';

/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @param $subtheme_defaults
 *   Allow a subtheme to override the default values.
 *
 * @return
 *   A form array.
 */
function zen_settings($saved_settings, $subtheme_defaults = [])
{

  // Add the form's CSS
  drupal_add_css(drupal_get_path('theme', 'zen').'/zen-internals/css/theme-settings.css', 'theme');

  // Add javascript to show/hide optional settings
  drupal_add_js(drupal_get_path('theme', 'zen').'/zen-internals/js/theme-settings.js', 'theme');

  // Get the default values from the .info file.
  $defaults = zen_theme_get_default_settings('zen');

  // Allow a subtheme to override the default values.
  $defaults = array_merge($defaults, $subtheme_defaults);

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  /*
   * Create the form using Forms API
   */
  $form['zen-div-opening'] = [
    '#value'         => '<div id="zen-settings">',
  ];

    $form['zen_block_editing'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show block editing on hover'),
    '#description'   => t('When hovering over a block, privileged users will see block editing links.'),
    '#default_value' => $settings['zen_block_editing'],
  ];

    $form['breadcrumb'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Breadcrumb settings'),
    '#attributes'    => ['id' => 'zen-breadcrumb'],
  ];
    $form['breadcrumb']['zen_breadcrumb'] = [
    '#type'          => 'select',
    '#title'         => t('Display breadcrumb'),
    '#default_value' => $settings['zen_breadcrumb'],
    '#options'       => [
                          'yes'   => t('Yes'),
                          'admin' => t('Only in admin section'),
                          'no'    => t('No'),
                        ],
  ];
    $form['breadcrumb']['zen_breadcrumb_separator'] = [
    '#type'          => 'textfield',
    '#title'         => t('Breadcrumb separator'),
    '#description'   => t('Text only. Don’t forget to include spaces.'),
    '#default_value' => $settings['zen_breadcrumb_separator'],
    '#size'          => 5,
    '#maxlength'     => 10,
    '#prefix'        => '<div id="div-zen-breadcrumb-collapse">', // jquery hook to show/hide optional widgets
  ];
    $form['breadcrumb']['zen_breadcrumb_home'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show home page link in breadcrumb'),
    '#default_value' => $settings['zen_breadcrumb_home'],
  ];
    $form['breadcrumb']['zen_breadcrumb_trailing'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Append a separator to the end of the breadcrumb'),
    '#default_value' => $settings['zen_breadcrumb_trailing'],
    '#description'   => t('Useful when the breadcrumb is placed just before the title.'),
  ];
    $form['breadcrumb']['zen_breadcrumb_title'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Append the content title to the end of the breadcrumb'),
    '#default_value' => $settings['zen_breadcrumb_title'],
    '#description'   => t('Useful when the breadcrumb is not placed just before the title.'),
    '#suffix'        => '</div>', // #div-zen-breadcrumb
  ];

    $form['themedev'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Theme development settings'),
    '#attributes'    => ['id' => 'zen-themedev'],
  ];
    $form['themedev']['zen_rebuild_registry'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Rebuild theme registry on every page.'),
    '#default_value' => $settings['zen_rebuild_registry'],
    '#description'   => t('During theme development, it can be very useful to continuously <a href="!link">rebuild the theme registry</a>. WARNING: this is a huge performance penalty and must be turned off on production websites.', ['!link' => 'http://drupal.org/node/173880#theme-registry']),
    '#prefix'        => '<div id="div-zen-registry"><strong>'.t('Theme registry:').'</strong>',
    '#suffix'        => '</div>',
  ];
    $form['themedev']['zen_layout'] = [
    '#type'          => 'radios',
    '#title'         => t('Layout method'),
    '#options'       => [
                          'zen-columns-liquid' => t('Liquid layout').' <small>(layout-liquid.css)</small>',
                          'zen-columns-fixed'  => t('Fixed layout').' <small>(layout-fixed.css)</small>',
                        ],
    '#default_value' => $settings['zen_layout'],
  ];
    $form['themedev']['zen_wireframes'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Display borders around main layout elements'),
    '#default_value' => $settings['zen_wireframes'],
    '#description'   => t('<a href="!link">Wireframes</a> are useful when prototyping a website.', ['!link' => 'http://www.boxesandarrows.com/view/html_wireframes_and_prototypes_all_gain_and_no_pain']),
    '#prefix'        => '<div id="div-zen-wireframes"><strong>'.t('Wireframes:').'</strong>',
    '#suffix'        => '</div>',
  ];

    $form['zen-div-closing'] = [
    '#value'         => '</div>',
  ];

  // Return the form
  return $form;
}
