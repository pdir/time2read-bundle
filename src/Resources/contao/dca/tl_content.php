<?php

$GLOBALS['TL_DCA']['tl_content']['fields']['ttr_activate_reading_time'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_user']['ttr_activate_reading_time'],
    'inputType' => 'checkbox',
    'eval' => ['tl_class'=>'w50'],
    'sql' => "char(1) NOT NULL default ''"
];

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addField('ttr_activate_reading_time', 'text')
    ->applyToPalette('text', 'tl_content')
;
