<?php

declare(strict_types=1);

namespace App\Action;

use Symfony\Component\HttpFoundation\Response;

class DefaultAction
{
    public function __invoke()
    {
        return new Response('Hello World');
    }
}
