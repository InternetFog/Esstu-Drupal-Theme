<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class PinnedSections
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="pinned-sections",
 *  admin_label="Pinned Sections Block",
 *  category="EsstuTheme"
 * )
 */


class PinnedSections extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'pinned-sections'
        ];
    }
}