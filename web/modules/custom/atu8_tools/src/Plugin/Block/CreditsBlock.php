<?php

namespace Drupal\atu8_tools\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CreditsBlock' block.
 *
 * @Block(
 *  id = "credits_block",
 *  admin_label = @Translation("Credits block"),
 * )
 */
class CreditsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['credits_block']['#markup'] = '  <div class="container"> <span class="copyright">Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</span>
';

    return $build;
  }

}
