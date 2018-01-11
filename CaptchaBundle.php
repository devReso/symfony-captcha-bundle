<?php

namespace Captcha\Bundle\CaptchaBundle;

use Captcha\Bundle\CaptchaBundle\DependencyInjection\CaptchaExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CaptchaBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new CaptchaExtension();
    }
}
