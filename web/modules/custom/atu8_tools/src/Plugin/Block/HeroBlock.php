<?php

namespace Drupal\atu8_tools\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HeroBlock' block.
 *
 * @Block(
 *  id = "hero_block",
 *  admin_label = @Translation("Hero block"),
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $build['first']['#markup'] = '<h2>Appartement in Utrecht te huur</h2>';
    $build['second']['#markup'] = '<p>Licht, recent gerenoveerd driekamerappartement van ca. 75m2 te huur in de
Rivierenbuurt</p>';


    return $build;
  }

}
