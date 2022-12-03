<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class Banner
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="banner",
 *  admin_label="Banner Block",
 *  category="EsstuTheme"
 * )
 */


class BannerBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'banner'
        ];
    }
}