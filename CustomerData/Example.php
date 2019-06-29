<?php

namespace Xigen\PrivateContent\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;

/**
 * Example data source
 */
class Example extends \Magento\Framework\DataObject implements SectionSourceInterface
{
    public function getSectionData()
    {
        return [
            'active' => 'This is active'
        ];
    }
}
