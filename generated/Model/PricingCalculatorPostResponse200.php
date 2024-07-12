<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class PricingCalculatorPostResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var PricingCalculatorPostResponse200CalculateProductionApiServiceCost|null
     */
    protected $calculateProductionApiServiceCost;

    public function getCalculateProductionApiServiceCost(): ?PricingCalculatorPostResponse200CalculateProductionApiServiceCost
    {
        return $this->calculateProductionApiServiceCost;
    }

    public function setCalculateProductionApiServiceCost(?PricingCalculatorPostResponse200CalculateProductionApiServiceCost $calculateProductionApiServiceCost): self
    {
        $this->initialized['calculateProductionApiServiceCost'] = true;
        $this->calculateProductionApiServiceCost = $calculateProductionApiServiceCost;

        return $this;
    }
}