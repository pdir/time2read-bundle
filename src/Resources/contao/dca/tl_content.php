<?php

$GLOBALS['TL_DCA']['tl_content']['fields']['ttr_activate_reading_time'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_user']['ttr_activate_reading_time'],
    'inputType' => 'checkbox',
    'eval' => ['tl_class'=>'w50'],
    'sql' => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['ttr_reading_time'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_user']['ttr_reading_time'],
    'inputType' => 'text',
    'eval' => ['tl_class'=>'w50'],
    'sql' => "int(1) NOT NULL default 0"
];


use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addField('ttr_activate_reading_time', 'text')
    ->addField('ttr_reading_time', 'ttr_activate_reading_time')
    ->applyToPalette('text', 'tl_content')
;
