<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class FooterBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="footer",
 *  admin_label="Footer Block",
 *  category="EsstuTheme"
 * )
 */


class FooterBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'footer'
        ];
    }
}