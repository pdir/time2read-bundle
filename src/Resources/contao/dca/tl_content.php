<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_content']['fields']['ttr_activate_reading_time'] = [
    'label'                 => &$GLOBALS['TL_LANG']['tl_content']['ttr_activate_reading_time'],
    'exclude'               => true,
    'inputType'             => 'checkbox',
    'default'               => 0,
    'eval'                  => ['tl_class' => 'm12 w50'],
    'sql'                   => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['ttr_reading_time'] = [
    'label'                 => &$GLOBALS['TL_LANG']['tl_content']['ttr_reading_time'],
    'exclude'               => true,
    'inputType'             => 'text',
    'eval'                  => ['maxlength' => 3, 'rgxp' => 'digit', 'tl_class' => 'w50'],
    'sql'                   => "int(3) unsigned NOT NULL default '0'"
];

PaletteManipulator::create()
    ->addField('ttr_activate_reading_time', 'text', PaletteManipulator::POSITION_AFTER)
    ->addField('ttr_reading_time', 'ttr_activate_reading_time', PaletteManipulator::POSITION_AFTER)
    ->applyToPalette('text', 'tl_content');
