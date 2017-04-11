<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception\Generator\Resolver;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Nelmio\Alice\Throwable\Exception\Generator\Resolver\FixtureNotFoundExceptionFactory
 */
class FixtureNotFoundExceptionFactoryTest extends TestCase
{
    public function testTestCreateNewExceptionWithFactory()
    {
        $exception = FixtureNotFoundExceptionFactory::create('foo');

        $this->assertEquals(
            'Could not find the fixture "foo".',
            $exception->getMessage()
        );
        $this->assertEquals(0, $exception->getCode());
        $this->assertNull($exception->getPrevious());
    }
}
