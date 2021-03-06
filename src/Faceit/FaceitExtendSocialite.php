<?php

namespace SocialiteProviders\Faceit;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FaceitExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('faceit', Provider::class);
    }
}
