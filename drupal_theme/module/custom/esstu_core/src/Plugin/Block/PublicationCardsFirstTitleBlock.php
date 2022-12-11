<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class PublicationCardsFirstTitleBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="publication-cards-first-title",
 *  admin_label="Publication Cards First Title Block",
 *  category="EsstuTheme"
 * )
 */


class PublicationCardsFirstTitleBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'publication-cards-first-title'
        ];
    }
}