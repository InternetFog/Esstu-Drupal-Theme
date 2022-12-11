<?php
namespace Drupal\esstu_core\Plugin\Block;

use Drupal\Core\Block\Annotation\Block; 
use Drupal\Core\Block\BlockBase;

/**
 * Class PublicationCardsThirdTitleBlock
 * @package Drupal\esstu_core\Plugin\Block
 * @Block(
 *  id="publication-cards-third-title",
 *  admin_label="Publication Cards Third Title Block",
 *  category="EsstuTheme"
 * )
 */


class PublicationCardsThirdTitleBlock extends BlockBase{
    public function build()
    {
        return [
            '#theme'=> 'publication-cards-third-title'
        ];
    }
}