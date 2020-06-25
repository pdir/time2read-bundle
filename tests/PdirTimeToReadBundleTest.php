<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Pdir\TimeToReadBundle\Tests;

use Pdir\TimeToReadBundle\PdirTimeToReadBundle;
use PHPUnit\Framework\TestCase;

class PdirTimeToReadBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new PdirTimeToReadBundle();

        $this->assertInstanceOf('Pdir\TimeToReadBundle\PdirTimeToReadBundle', $bundle);
    }
}
