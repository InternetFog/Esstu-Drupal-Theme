<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class PinnedSectionsTitle
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="pinned-sections-title",
 *  admin_label="Pinned Sections Title Block",
 *  category="EsstuTheme"
 * )
 */


class PinnedSectionsTitle extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'pinned-sections-title'
        ];
    }
}