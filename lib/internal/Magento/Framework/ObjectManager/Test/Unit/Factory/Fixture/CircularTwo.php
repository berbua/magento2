<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\ObjectManager\Test\Unit\Factory\Fixture;

/**
 * Part of the chain for circular dependency test
 */
class CircularTwo
{
    /**
     * @param CircularThree $three
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function __construct(CircularThree $three)
    {
    }
}
