<?php

namespace Pixney\MapcontactBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\MapcontactBlockExtension\Block\BlockModel;

class MapcontactBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.mapcontact';
    protected $model    = BlockModel::class;
    protected $wrapper  = 'pixney.theme.esharawater::blocks/global/wrapper';

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'pixney.theme.esharawater::blocks/mapcontact';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}
