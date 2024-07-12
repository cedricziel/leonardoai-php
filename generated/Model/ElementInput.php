<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class ElementInput extends \ArrayObject
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
     * Unique identifier for element. Elements can be found from the List Elements endpoint.
     *
     * @var string|null
     */
    protected $akUUID;
    /**
     * Weight for the element.
     *
     * @var float|null
     */
    protected $weight;

    /**
     * Unique identifier for element. Elements can be found from the List Elements endpoint.
     */
    public function getAkUUID(): ?string
    {
        return $this->akUUID;
    }

    /**
     * Unique identifier for element. Elements can be found from the List Elements endpoint.
     */
    public function setAkUUID(?string $akUUID): self
    {
        $this->initialized['akUUID'] = true;
        $this->akUUID = $akUUID;

        return $this;
    }

    /**
     * Weight for the element.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Weight for the element.
     */
    public function setWeight(?float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }
}