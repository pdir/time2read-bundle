<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Pdir\TimeToReadBundle\Tests;

use Pdir\TimeToReadBundle\ContaoTimeToReadBundle;
use PHPUnit\Framework\TestCase;

class ContaoTimeToReadBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoTimeToReadBundle();

        $this->assertInstanceOf('Pdir\TimeToReadBundle\ContaoTimeToReadBundle', $bundle);
    }
}
