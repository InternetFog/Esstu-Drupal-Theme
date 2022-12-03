<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class ControlNavigationBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="control_navigation",
 *  admin_label="Control Navigarion Block",
 *  category="EsstuTheme"
 * )
 */


class ControlNavigationBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'control-navigation'
        ];
    }
}