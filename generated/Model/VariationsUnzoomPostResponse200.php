<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class VariationsUnzoomPostResponse200 extends \ArrayObject
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
     * @var VariationsUnzoomPostResponse200SdUnzoomJob|null
     */
    protected $sdUnzoomJob;

    public function getSdUnzoomJob(): ?VariationsUnzoomPostResponse200SdUnzoomJob
    {
        return $this->sdUnzoomJob;
    }

    public function setSdUnzoomJob(?VariationsUnzoomPostResponse200SdUnzoomJob $sdUnzoomJob): self
    {
        $this->initialized['sdUnzoomJob'] = true;
        $this->sdUnzoomJob = $sdUnzoomJob;

        return $this;
    }
}