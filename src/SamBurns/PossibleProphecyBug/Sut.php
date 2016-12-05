<?php
declare(strict_types=1);

namespace SamBurns\PossibleProphecyBug;

class Sut
{
    private $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function doSomething()
    {
        $this->collaborator->getNumber();
        return 1;
    }
}
