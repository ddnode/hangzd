<?php

class panels_mini_ui extends ctools_export_ui
{
    public function init($plugin)
    {
        parent::init($plugin);
        ctools_include('context');
    }

    public function list_form(&$form, &$form_state)
    {
        ctools_include('plugins', 'panels');
        $this->layouts = panels_get_layouts();

        parent::list_form($form, $form_state);

        $categories = $layouts = ['all' => t('- All -')];
        foreach ($this->items as $item) {
            $categories[$item->category] = $item->category ? $item->category : t('Mini panels');
        }

        $form['top row']['category'] = [
      '#type'          => 'select',
      '#title'         => t('Category'),
      '#options'       => $categories,
      '#default_value' => 'all',
      '#weight'        => -10,
    ];

        foreach ($this->layouts as $name => $plugin) {
            $layouts[$name] = $plugin['title'];
        }

        $form['top row']['layout'] = [
      '#type'          => 'select',
      '#title'         => t('Layout'),
      '#options'       => $layouts,
      '#default_value' => 'all',
      '#weight'        => -9,
    ];
    }

    public function list_filter($form_state, $item)
    {
        if ($form_state['values']['category'] != 'all' && $form_state['values']['category'] != $item->category) {
            return true;
        }

        if ($form_state['values']['layout'] != 'all' && $form_state['values']['layout'] != $item->display->layout) {
            return true;
        }

        return parent::list_filter($form_state, $item);
    }

    public function list_sort_options()
    {
        return [
      'disabled' => t('Enabled, title'),
      'title'    => t('Title'),
      'name'     => t('Name'),
      'category' => t('Category'),
      'storage'  => t('Storage'),
      'layout'   => t('Layout'),
    ];
    }

    public function list_build_row($item, &$form_state, $operations)
    {
        // Set up sorting
    switch ($form_state['values']['order']) {
      case 'disabled':
        $this->sorts[$item->name] = empty($item->disabled).$item->admin_title;
        break;
      case 'title':
        $this->sorts[$item->name] = $item->admin_title;
        break;
      case 'name':
        $this->sorts[$item->name] = $item->name;
        break;
      case 'category':
        $this->sorts[$item->name] = ($item->category ? $item->category : t('Mini panels')).$item->admin_title;
        break;
      case 'layout':
        $this->sorts[$item->name] = $item->display->layout.$item->admin_title;
        break;
      case 'storage':
        $this->sorts[$item->name] = $item->type.$item->admin_title;
        break;
    }

        $layout = !empty($this->layouts[$item->display->layout]) ? $this->layouts[$item->display->layout]['title'] : t('Missing layout');
        $category = $item->category ? check_plain($item->category) : t('Mini panels');

        $this->rows[$item->name] = [
      'data' => [
        ['data' => check_plain($item->admin_title), 'class' => 'ctools-export-ui-title'],
        ['data' => check_plain($item->name), 'class' => 'ctools-export-ui-name'],
        ['data' => $category, 'class' => 'ctools-export-ui-category'],
        ['data' => $layout, 'class' => 'ctools-export-ui-layout'],
        ['data' => $item->type, 'class' => 'ctools-export-ui-storage'],
        ['data' => theme('links', $operations), 'class' => 'ctools-export-ui-operations'],
      ],
      'title' => !empty($item->admin_description) ? check_plain($item->admin_description) : '',
      'class' => !empty($item->disabled) ? 'ctools-export-ui-disabled' : 'ctools-export-ui-enabled',
    ];
    }

    public function list_table_header()
    {
        return [
      ['data' => t('Title'), 'class' => 'ctools-export-ui-title'],
      ['data' => t('Name'), 'class' => 'ctools-export-ui-name'],
      ['data' => t('Category'), 'class' => 'ctools-export-ui-category'],
      ['data' => t('Layout'), 'class' => 'ctools-export-ui-layout'],
      ['data' => t('Storage'), 'class' => 'ctools-export-ui-storage'],
      ['data' => t('Operations'), 'class' => 'ctools-export-ui-operations'],
    ];
    }

    public function edit_form(&$form, &$form_state)
    {
        // Get the basic edit form
    parent::edit_form($form, $form_state);

        $form['category'] = [
      '#type'          => 'textfield',
      '#size'          => 24,
      '#default_value' => $form_state['item']->category,
      '#title'         => t('Category'),
      '#description'   => t("The category that this mini-panel will be grouped into on the Add Content form. Only upper and lower-case alphanumeric characters are allowed. If left blank, defaults to 'Mini panels'."),
    ];

        $form['title']['#title'] = t('Title');
        $form['title']['#description'] = t('The title for this mini panel. It can be overridden in the block configuration.');
    }

  /**
   * Validate submission of the mini panel edit form.
   */
  public function edit_form_basic_validate($form, &$form_state)
  {
      parent::edit_form_validate($form, $form_state);
      if (preg_match('/[^A-Za-z0-9 ]/', $form_state['values']['category'])) {
          form_error($form['category'], t('Categories may contain only alphanumerics or spaces.'));
      }
  }

    public function edit_form_submit(&$form, &$form_state)
    {
        parent::edit_form_submit($form, $form_state);
        $form_state['item']->category = $form_state['values']['category'];
    }

    public function edit_form_context(&$form, &$form_state)
    {
        ctools_include('context-admin');
        ctools_context_admin_includes();
        ctools_add_css('ruleset');

        $form['right'] = [
      '#prefix' => '<div class="ctools-right-container">',
      '#suffix' => '</div>',
    ];

        $form['left'] = [
      '#prefix' => '<div class="ctools-left-container clear-block">',
      '#suffix' => '</div>',
    ];

    // Set this up and we can use CTools' Export UI's built in wizard caching,
    // which already has callbacks for the context cache under this name.
    $module = 'ctools_export_ui-'.$this->plugin['name'];
        $name = $this->edit_cache_get_key($form_state['item'], $form_state['form type']);

        ctools_context_add_context_form($module, $form, $form_state, $form['right']['contexts_table'], $form_state['item'], $name);
        ctools_context_add_required_context_form($module, $form, $form_state, $form['left']['required_contexts_table'], $form_state['item'], $name);
        ctools_context_add_relationship_form($module, $form, $form_state, $form['right']['relationships_table'], $form_state['item'], $name);
    }

    public function edit_form_context_submit(&$form, &$form_state)
    {
        // Prevent this from going to edit_form_submit();
    }

    public function edit_form_layout(&$form, &$form_state)
    {
        ctools_include('common', 'panels');
        ctools_include('display-layout', 'panels');
        ctools_include('plugins', 'panels');

    // @todo -- figure out where/how to deal with this.
    $form_state['allowed_layouts'] = 'panels_mini';

        if ($form_state['op'] == 'add' && empty($form_state['item']->display)) {
            $form_state['item']->display = panels_new_display();
        }

        $form_state['display'] = &$form_state['item']->display;

    // Tell the Panels form not to display buttons.
    $form_state['no buttons'] = true;

    // Change the #id of the form so the CSS applies properly.
    $form['#id'] = 'panels-choose-layout';
        $form = array_merge($form, panels_choose_layout($form_state));

        if ($form_state['op'] == 'edit') {
            $form['buttons']['next']['#value'] = t('Change');
        }
    }

  /**
   * Validate that a layout was chosen.
   */
  public function edit_form_layout_validate(&$form, &$form_state)
  {
      $display = &$form_state['display'];
      if (empty($form_state['values']['layout'])) {
          form_error($form['layout'], t('You must select a layout.'));
      }
      if ($form_state['op'] == 'edit') {
          if ($form_state['values']['layout'] == $display->layout) {
              form_error($form['layout'], t('You must select a different layout if you wish to change layouts.'));
          }
      }
  }

  /**
   * A layout has been selected, set it up.
   */
  public function edit_form_layout_submit(&$form, &$form_state)
  {
      $display = &$form_state['display'];
      if ($form_state['op'] == 'edit') {
          if ($form_state['values']['layout'] != $display->layout) {
              $form_state['item']->temp_layout = $form_state['values']['layout'];
              $form_state['clicked_button']['#next'] = 'move';
          }
      } else {
          $form_state['item']->display->layout = $form_state['values']['layout'];
      }
  }

  /**
   * When a layout is changed, the user is given the opportunity to move content.
   */
  public function edit_form_move(&$form, &$form_state)
  {
      $form_state['display'] = &$form_state['item']->display;
      $form_state['layout'] = $form_state['item']->temp_layout;

      ctools_include('common', 'panels');
      ctools_include('display-layout', 'panels');
      ctools_include('plugins', 'panels');

    // Tell the Panels form not to display buttons.
    $form_state['no buttons'] = true;

    // Change the #id of the form so the CSS applies properly.
    $form = array_merge($form, panels_change_layout($form_state));

    // This form is outside the normal wizard list, so we need to specify the
    // previous/next forms.
    $form['buttons']['previous']['#next'] = 'layout';
      $form['buttons']['next']['#next'] = 'content';
  }

    public function edit_form_move_submit(&$form, &$form_state)
    {
        panels_change_layout_submit($form, $form_state);
    }

    public function edit_form_content(&$form, &$form_state)
    {
        ctools_include('ajax');
        ctools_include('plugins', 'panels');
        ctools_include('display-edit', 'panels');
        ctools_include('context');

    // If we are cloning an item, we MUST have this cached for this to work,
    // so make sure:
    if ($form_state['form type'] == 'clone' && empty($form_state['item']->export_ui_item_is_cached)) {
        $this->edit_cache_set($form_state['item'], 'clone');
    }

        $cache = panels_edit_cache_get('panels_mini:'.$this->edit_cache_get_key($form_state['item'], $form_state['form type']));

        $form_state['renderer'] = panels_get_renderer_handler('editor', $cache->display);
        $form_state['renderer']->cache = &$cache;

        $form_state['display'] = &$cache->display;
        $form_state['content_types'] = $cache->content_types;
    // Tell the Panels form not to display buttons.
    $form_state['no buttons'] = true;
        $form_state['display_title'] = !empty($cache->display_title);

        $form = array_merge($form, panels_edit_display_form($form_state));
    // Make sure the theme will work since our form id is different.
    $form['#theme'] = 'panels_edit_display_form';
    }

    public function edit_form_content_submit(&$form, &$form_state)
    {
        panels_edit_display_form_submit($form, $form_state);
        $form_state['item']->display = $form_state['display'];
    }
}
