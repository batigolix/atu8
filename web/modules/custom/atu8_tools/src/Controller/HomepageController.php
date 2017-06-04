<?php

namespace Drupal\atu8_tools\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HomepageController.
 *
 * @package Drupal\atu8_tools\Controller
 */
class HomepageController extends ControllerBase {

  /**
   * Build.
   *
   * @return string
   *   Return Hello string.
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => NULL,
    ];
  }

}
