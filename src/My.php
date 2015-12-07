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


/**
 * @package    Money
 * @author     Sebastian Bergmann <sebastian@phpunit.de>
 * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://www.github.com/sebastianbergmann/money
 */
class My
{
    private $amount;

    public function __construct()
    {
        $this->amount = 123;
    }

    public function prints($param)
    {
        return $param;
    }

    public function prints2($param)
    {
        return $param;
    }
}