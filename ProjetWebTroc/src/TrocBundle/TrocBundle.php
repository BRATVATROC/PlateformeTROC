<?php

namespace TrocBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TrocBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
