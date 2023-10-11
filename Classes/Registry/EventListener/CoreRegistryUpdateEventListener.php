<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Pdf\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Pdf\DistributorPdfInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPdfInitialization());
    }
}
