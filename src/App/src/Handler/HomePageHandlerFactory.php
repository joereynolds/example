<?php

namespace App\Handler;

use Zend\Expressive\Template\TemplateRendererInterface;

class HomePageHandlerFactory
{
    public function __invoke($container)
    {
        return new HomePageHandler(
            $container->get(TemplateRendererInterface::class)
        );
    }
}
