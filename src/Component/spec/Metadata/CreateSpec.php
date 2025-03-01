<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Sylius\Component\Resource\Metadata;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Metadata\Create;
use Sylius\Component\Resource\Metadata\CreateOperationInterface;
use Sylius\Component\Resource\Metadata\Operation;

final class CreateSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Create::class);
    }

    function it_is_an_operation(): void
    {
        $this->shouldHaveType(Operation::class);
    }

    function it_implements_create_operation_interface(): void
    {
        $this->shouldImplement(CreateOperationInterface::class);
    }

    function it_has_create_name_by_default(): void
    {
        $this->getName()->shouldReturn('create');
    }

    function it_has_get_and_post_methods_by_default(): void
    {
        $this->getMethods()->shouldReturn(['GET', 'POST']);
    }
}
