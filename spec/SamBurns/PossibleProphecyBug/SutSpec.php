<?php

namespace spec\SamBurns\PossibleProphecyBug;

use SamBurns\PossibleProphecyBug\Collaborator;
use SamBurns\PossibleProphecyBug\Sut;
use PhpSpec\ObjectBehavior;

/**
 * @mixin Sut
 */
class SutSpec extends ObjectBehavior
{
    function let(Collaborator $collaborator)
    {
        $this->beConstructedWith($collaborator);
    }

    function it_doesnt_break()
    {
        $this->doSomething()->shouldBe(1);
    }
}
