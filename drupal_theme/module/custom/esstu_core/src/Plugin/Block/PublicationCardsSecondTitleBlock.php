<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class PublicationCardsSecondTitleBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="publication-cards-second-title",
 *  admin_label="Publication Cards Second Title Block",
 *  category="EsstuTheme"
 * )
 */


class PublicationCardsSecondTitleBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'publication-cards-second-title'
        ];
    }
}