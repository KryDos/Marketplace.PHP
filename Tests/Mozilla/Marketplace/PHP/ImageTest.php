<?php
/**
 * Copyright 2013 - Mozilla
 *
 * @author Kinn Coelho Julião <kinncj@gmail.com>
 */

namespace Mozilla\Marketplace\Test\PHP;

use Mozilla\Marketplace\PHP\Image;

/**
 * Test the Image Extension
 *
 * @group Functional
 */
class ImageTest extends \PHPUnit_Framework_TestCase
{
    private $image;

    public function setUp()
    {
        $this->image = new Image;

        parent::setUp();
    }

    public function testShouldRegisterFunction()
    {
        $this->image->load();

        $this->assertTrue(function_exists('getimagesizefromstring'));
    }
}
