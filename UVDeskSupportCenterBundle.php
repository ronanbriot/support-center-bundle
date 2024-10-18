<?php

namespace Webkul\UVDesk\SupportCenterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Webkul\UVDesk\SupportCenterBundle\DependencyInjection\SupportCenterExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class UVDeskSupportCenterBundle extends Bundle
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface|null
     *
     * @throws \LogicException
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new SupportCenterExtension();
    }
}
