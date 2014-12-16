<?php

namespace KRSolutions\Bundle\KRUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KRSolutionsKRUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
