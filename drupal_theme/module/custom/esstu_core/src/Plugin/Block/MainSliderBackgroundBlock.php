<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class MainSliderBackgroundBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="main-slider-background",
 *  admin_label="Main slider background Block",
 *  category="EsstuTheme"
 * )
 */


class MainSliderBackgroundBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'main-slider-background'
        ];
    }
}