<?php

/*
 * This file is part of Alt Three TestBench.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\TestBench;

use Illuminate\Queue\SerializesModels;
use ReflectionClass;

/**
 * This is the job trait.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
trait JobTrait
{
    use AnemicTrait;

    public function testJobSerializesModels()
    {
        $rc = new ReflectionClass($this->getObjectAndParams()['object']);

        $this->assertSame([SerializesModels::class], $rc->getTraitNames());
    }
}
