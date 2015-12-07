<?php
/*
 * This file is part of the Money package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\My;

class MyTest extends \PHPUnit_Framework_TestCase
{
	
	/**
     * @covers            \SebastianBergmann\My\My::__construct
     * @covers            \SebastianBergmann\My\My::prints
     * @uses              \SebastianBergmann\My\My     
     */
    public function test1()
    {
        $xx = new My();
        $tt = $xx->prints("hello");
        $this->assertEquals('hello', $tt);
    }
}


// use \SebastianBergmann\My\Mys;

// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");
// $xx = new Mys();
// echo $xx->prints("hello");