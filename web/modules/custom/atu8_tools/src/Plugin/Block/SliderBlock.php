<?php

namespace Drupal\atu8_tools\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides a 'SliderBlock' block.
 *
 * @Block(
 *  id = "slider_block",
 *  admin_label = @Translation("Slider block"),
 * )
 */
class SliderBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        $build = [];
        $query = \Drupal::entityQuery('node');
        $query->condition('type', 'photo');
        $query->sort('nid', 'ASC');
        $nids = $query->execute();
        $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadMultiple($nids);
        $build['slides']['#prefix'] = '<ul id="lightSlider">';
        $build['slides']['#suffix'] = '</ul>';
        foreach ($nodes as $node) {
            $file = $node->field_image->entity;
            if ($file) {
                $uri = $file->getFileUri();
                $large_uri = ImageStyle::load('jumbo')->buildUrl($uri);
                $thumbnail_uri = ImageStyle::load('thumbnail')->buildUrl($uri);
                $build['slides'][] = [
                    '#theme' => 'slider_item',
                    '#large_uri' => $large_uri,
                    '#thumbnail_uri' => $thumbnail_uri,
                ];
            }
        }
        $build['#attached']['library'][] = 'atu8_tools/lightslider';
        return $build;
    }
}

