<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Pdf\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Pdf\DistributorPluginInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;

class DistributorRegistryPluginUpdateEventListener
{
    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        $registry = $event->getRegistry();
        DistributorPluginInitialization::initialize($registry);
    }
}
