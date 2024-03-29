<?php

class panels_renderer_single_pane extends panels_renderer_standard
{
    /**
   * The pane id of the pane that will be rendered by a call to the render()
   * method. Numeric int or string (typically if a new-# id has been used).
   *
   * @var mixed
   */
  public $render_pid;

  /**
   * Modified build method (vs. panels_renderer_standard::build()); takes just
   * the display, no layout is necessary.
   *
   * @param array          $plugin
   *                                The definition of the renderer plugin.
   * @param panels_display $display
   *                                The panels display object to be rendered.
   */
  public function init($plugin, &$display)
  {
      $this->plugin = $plugin;
      $this->display = &$display;
  }

    public function prepare($external_settings = null)
    {
        $this->render_pid = $external_settings;
    }

    public function render()
    {
        // If no requested pid, or requested pid does not exist,
    if (empty($this->render_pid) || empty($this->display->content[$this->render_pid])) {
        return;
    }

        return $this->render_pane($this->display->content[$this->render_pid]);
    }

    public function render_single($pid)
    {
        return $this->render_pane($this->display->content[$pid]);
    }
}
