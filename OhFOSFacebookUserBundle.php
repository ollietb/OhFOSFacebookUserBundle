<?php

namespace Oh\FOSFacebookUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OhFOSFacebookUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
