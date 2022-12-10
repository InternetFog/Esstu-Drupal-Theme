<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class SocialNetworksBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="social-networks",
 *  admin_label="Social Networks Block",
 *  category="EsstuTheme"
 * )
 */


class SocialNetworksBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'social-networks'
        ];
    }
}