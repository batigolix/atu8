<?php

namespace Drupal\atu8_tools\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'GaBlock' block.
 *
 * @Block(
 *  id = "ga_block",
 *  admin_label = @Translation("Ga block"),
 * )
 */
class GaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array();
    $build['#attached']['library'][] = 'atu8_tools/ga';
    return $build;
  }

}
