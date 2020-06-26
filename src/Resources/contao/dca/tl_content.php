<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_content']['fields']['ttr_activate_reading_time'] = [
    'label'                 => &$GLOBALS['TL_LANG']['tl_content']['ttr_activate_reading_time'],
    'exclude'               => true,
    'inputType'             => 'checkbox',
    'default'               => 0,
    'eval'                  => ['tl_class' => 'w50'],
    'sql'                   => "char(1) NOT NULL default ''"
];

PaletteManipulator::create()
    ->addField('ttr_activate_reading_time', 'title_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('text', 'tl_content');
