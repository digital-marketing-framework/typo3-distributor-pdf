<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Pdf\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Pdf\DistributorPdfInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPdfInitialization());
    }
}
