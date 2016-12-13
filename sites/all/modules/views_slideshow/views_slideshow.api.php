<?php

/**
 * @file
 * Hooks provided by Views Slideshow.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Define the type of the slideshow (eg.: cycle, imageflow, ddblock).
 *
 * @return
 *  Associative array of slideshow type and its information.
 */
function hook_views_slideshow_slideshow_info()
{
    $options = [
    'views_slideshow_cycle' => [
      'name'    => t('Cycle'),
      'accepts' => [
        'goToSlide',
        'nextSlide',
        'pause',
        'play',
        'previousSlide',
      ],
      'calls' => [
        'transitionBegin',
        'transitionEnd',
        'goToSlide',
        'pause',
        'play',
        'nextSlide',
        'previousSlide',
      ],
    ],
  ];

    return $options;
}

/**
 * Define form fields to be displayed in the views settings form.
 * These fields would help configure your slideshow type.
 */
function hook_views_slideshow_slideshow_type_form(&$form, &$form_state, &$view)
{
    $form['views_slideshow_cycle']['effect'] = [
    '#type'          => 'select',
    '#title'         => t('Effect'),
    '#options'       => $effects,
    '#default_value' => $view->options['views_slideshow_cycle']['effect'],
    '#description'   => t('The transition effect that will be used to change between images. Not all options below may be relevant depending on the effect. '.l('Follow this link to see examples of each effect.', 'http://jquery.malsup.com/cycle/browser.html', ['attributes' => ['target' => '_blank']])),
  ];
}

/**
 * Set default values for your form fields specified in hook_views_slideshow_type_form.
 *
 * @return
 *  Associative array of slideshow type name and options.
 */
function hook_views_slideshow_option_definition()
{
    $options['views_slideshow_cycle'] = [
    'contains' => [
      // Transition
      'effect'              => ['default' => 'fade'],
      'transition_advanced' => ['default' => 0],
      'timeout'             => ['default' => 5000],
      'speed'               => ['default' => 700], //normal
      'delay'               => ['default' => 0],
      'sync'                => ['default' => 1],
      'random'              => ['default' => 0],
    ],
  ];

    return $options;
}

/**
 * Form validation callback for the slideshow settings.
 */
function hook_views_slideshow_options_form_validate(&$form, &$form_state, &$view)
{
    if (!is_numeric($form_state['values']['style_options']['views_slideshow_cycle']['speed'])) {
        form_error($form['views_slideshow_cycle']['speed'], t('!setting must be numeric!', ['Speed']));
    }
    if (!is_numeric($form_state['values']['style_options']['views_slideshow_cycle']['timeout'])) {
        form_error($form['views_slideshow_cycle']['speed'], t('!setting must be numeric!', ['timeout']));
    }
    if (!is_numeric($form_state['values']['style_options']['views_slideshow_cycle']['remember_slide_days'])) {
        form_error($form['views_slideshow_cycle']['remember_slide_days'], t('!setting must be numeric!', ['Slide days']));
    }
}

/**
 * Form submission callback for the slideshow settings.
 */
function hook_views_slideshow_options_form_submit($form, &$form_state)
{
    // Act on option submission.
}

/**
 * Define slideshow skins to be available to the end user.
 */
function hook_views_slideshow_skin_info()
{
    return [
    'default' => [
      'name' => [
        t('Default'),
      ],
    ],
  ];
}

/**
 * Define new widgets (pagers, controls, counters).
 *
 * @return
 *  Array keyed by the widget names.
 *
 * Available events for accepts and calls
 *  - pause
 *  - play
 *  - nextSlide
 *  - previousSlide
 *  - goToSlide
 *  - transitionBegin
 *  - transitionEnd
 */
function hook_views_slideshow_widget_info()
{
    return [
    'views_slideshow_pager' => [
      'name'    => t('Pager'),
      'accepts' => [
        'transitionBegin' => ['required' => true],
        'goToSlide',
        'previousSlide',
        'nextSlide',
      ],
      'calls' => [
        'goToSlide',
        'pause',
        'play',
      ],
    ],
    'views_slideshow_controls' => [
      'name'    => t('Controls'),
      'accepts' => [
        'pause' => ['required' => true],
        'play'  => ['required' => true],
      ],
      'calls' => [
        'nextSlide',
        'pause',
        'play',
        'previousSlide',
      ],
    ],
    'views_slideshow_slide_counter' => [
      'name'    => t('Slide Counter'),
      'accepts' => [
        'transitionBegin' => ['required' => true],
        'goToSlide',
        'previousSlide',
        'nextSlide',
      ],
      'calls' => [],
    ],
  ];
}

/**
 * Form fields to be added for a specific widget type. Example of a widget type would be views_slideshow_pager or views_slideshow_slide_counter.
 */
function INSERT_WIDGET_TYPE_HERE_views_slideshow_widget_form_options(&$form, $form_state, $view, $defaults, $dependency)
{
}

/**
 * Hook called by the pager widget to configure it, the fields that should be shown.
 */
function hook_views_slideshow_widget_pager_info($view)
{
}

/**
 * Hook called by the pager widget to add form items.
 */
function INSERT_WIDGET_TYPE_HERE_views_slideshow_widget_pager_form_options(&$form, &$form_state, &$view, $defaults, $dependency)
{
}

/**
 * Hook called by the controls widget to configure it, the fields that should be shown.
 */
function hook_views_slideshow_widget_controls_info($view)
{
}

/**
 * Hook called by the controls widget to add form items.
 */
function INSERT_WIDGET_TYPE_HERE_views_slideshow_widget_controls_form_options(&$form, &$form_state, &$view, $defaults, $dependency)
{
}

/*
 * @} End of "addtogroup hooks".
 */
