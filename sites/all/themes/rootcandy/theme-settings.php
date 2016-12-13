<?php

/**
 * @file
 * The theme settings
 */

/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   array An array of saved settings for this theme.
 *
 * @return
 *   array A form array.
 */
function rootcandy_settings($saved_settings, $subtheme_defaults = [])
{

  // Get the default values from the .info file.
  $themes = list_themes();
    $defaults = $themes['rootcandy']->info['settings'];

  // Allow a subtheme to override the default values.
  $defaults = array_merge($defaults, $subtheme_defaults);

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  // Create the form widgets using Forms API
  $form['header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Header'),
    '#weight'      => 1,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];
    $form['header']['rootcandy_header_display'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Disable header'),
    '#default_value' => $settings['rootcandy_header_display'],
  ];
    $form['header']['rootcandy_hide_panel'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Disable sliding panel'),
    '#default_value' => $settings['rootcandy_hide_panel'],
  ];
    $form['dashboard'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Dashboard'),
    '#weight'      => 1,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];
    $form['dashboard']['rootcandy_dashboard_display'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Disable dashboard regions'),
    '#default_value' => $settings['rootcandy_dashboard_display'],
  ];
    $form['dashboard']['rootcandy_dashboard_help'] = [
    '#type'          => 'select',
    '#options'       => ['left' => t('Left'), 'right' => t('Right'), 'content' => t('Content')],
    '#title'         => t('Help box position'),
    '#default_value' => $settings['rootcandy_dashboard_help'],
  ];
    $form['dashboard']['rootcandy_dashboard_messages'] = [
    '#type'          => 'select',
    '#options'       => ['left' => t('Left'), 'right' => t('Right'), 'content' => t('Content')],
    '#title'         => t('Messages box position'),
    '#default_value' => $settings['rootcandy_dashboard_messages'],
  ];
    $form['dashboard']['rootcandy_dashboard_content_display'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Disable content on a dashboard'),
    '#default_value' => $settings['rootcandy_dashboard_content_display'],
  ];

    $form['navigation'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Navigation'),
    '#weight'      => 1,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];
  // Create the form widgets using Forms API
  $form['navigation']['rootcandy_navigation_icons'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Disable icons for main navigation'),
    '#default_value' => $settings['rootcandy_navigation_icons'],
  ];

    $form['navigation']['rootcandy_navigation_icons_size'] = [
    '#type'          => 'select',
    '#options'       => [16 => 16, 24 => 24, 32 => 32],
    '#title'         => t('Set icons size for main navigation'),
    '#default_value' => $settings['rootcandy_navigation_icons_size'],
  ];

    $menu_options = array_merge(['_rootcandy_default_navigation' => t('default navigation')], menu_get_menus());

    if (!isset($settings['rootcandy_navigation_source_admin'])) {
        $settings['rootcandy_navigation_source_admin'] = '_rootcandy_default_navigation';
    }

    $form['navigation']['rootcandy_superuser_menu'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Super user (uid 1) menu'),
    '#weight'      => 1,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];

    $form['navigation']['rootcandy_superuser_menu']['rootcandy_navigation_source_admin'] = [
    '#type'          => 'select',
    '#default_value' => $settings['rootcandy_navigation_source_admin'],
    '#options'       => $menu_options,
    '#tree'          => false,
  ];

    $primary_options = [
    null => t('None'),
  ];

    $primary_options = array_merge($primary_options, $menu_options);

    $form['navigation']['role-weights'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Menu by role and weights'),
    '#weight'      => 2,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];

    $roles = user_roles(false);
    $max_weight = 0;
    foreach ($roles as $rid => $role) {
        if (empty($settings['rootcandy_navigation_source_'.$rid])) {
            $settings['rootcandy_navigation_source_'.$rid] = '';
        }

        $form['navigation']['nav-by-role']['rootcandy_navigation_source_'.$rid] = [
      '#type'          => 'select',
      '#default_value' => $settings['rootcandy_navigation_source_'.$rid],
      '#options'       => $primary_options,
      '#tree'          => false,
    ];

    // check the highest weight for later use
    if (isset($settings['role-weight-'.$rid])) {
        if ($max_weight < $settings['role-weight-'.$rid]) {
            $max_weight = $settings['role-weight-'.$rid];
        }
    }
    }

    $form['navigation']['custom-icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Custom icons'),
    '#weight'      => 1,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];

    $form['navigation']['custom-icons']['rootcandy_navigation_custom_icons'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom icons'),
    '#default_value' => $settings['rootcandy_navigation_custom_icons'],
    '#description'   => t('Format: menu href|icon path (relative to drupal root) - one item per row. eg. admin/build|files/myicons/admin-build.png'),
    '#required'      => false,
  ];

  // Create the form widgets using Forms API
  $form['Misc'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Misc'),
    '#weight'      => 1,
    '#collapsible' => true,
    '#collapsed'   => true,
  ];
    $form['Misc']['rootcandy_help_display'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Disable help'),
    '#default_value' => $settings['rootcandy_help_display'],
  ];
    $form['Misc']['rootcandy_hide_author'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Hide author footer message'),
    '#default_value' => $settings['rootcandy_hide_author'],
  ];

    $max_weight = (isset($max_weight)) ? $max_weight : 100;
    foreach ($roles as $rid => $role) {
        if (empty($settings['role-weight-'.$rid])) {
            $settings['role-weight-'.$rid] = '';
        }
        if (!$weight = $settings['role-weight-'.$rid]) {
            $weight = ++$max_weight;
        }
        $data = [$role];
        $form['rows'][$rid]['data'] = ['#type' => 'value', '#value' => $data];
        $form['rows'][$rid]['role-weight-'.$rid] = [
      '#type'          => 'textfield',
      '#size'          => 5,
      '#default_value' => $weight,
      '#attributes'    => ['class' => 'weight'],
    ];
    }

  // Return the additional form widgets
  return $form;
}
