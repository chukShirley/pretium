<?php
namespace App\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class HelloActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new HelloAction(
            $container->get(TemplateRendererInterface::class)
        );
    }
}
