<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class CanvasInitImagePostResponse200UploadCanvasInitImage extends \ArrayObject
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
     * @var string|null
     */
    protected $initImageId;
    /**
     * @var string|null
     */
    protected $initFields;
    /**
     * @var string|null
     */
    protected $initKey;
    /**
     * @var string|null
     */
    protected $initUrl;
    /**
     * @var string|null
     */
    protected $maskImageId;
    /**
     * @var string|null
     */
    protected $maskFields;
    /**
     * @var string|null
     */
    protected $maskKey;
    /**
     * @var string|null
     */
    protected $maskUrl;

    public function getInitImageId(): ?string
    {
        return $this->initImageId;
    }

    public function setInitImageId(?string $initImageId): self
    {
        $this->initialized['initImageId'] = true;
        $this->initImageId = $initImageId;

        return $this;
    }

    public function getInitFields(): ?string
    {
        return $this->initFields;
    }

    public function setInitFields(?string $initFields): self
    {
        $this->initialized['initFields'] = true;
        $this->initFields = $initFields;

        return $this;
    }

    public function getInitKey(): ?string
    {
        return $this->initKey;
    }

    public function setInitKey(?string $initKey): self
    {
        $this->initialized['initKey'] = true;
        $this->initKey = $initKey;

        return $this;
    }

    public function getInitUrl(): ?string
    {
        return $this->initUrl;
    }

    public function setInitUrl(?string $initUrl): self
    {
        $this->initialized['initUrl'] = true;
        $this->initUrl = $initUrl;

        return $this;
    }

    public function getMaskImageId(): ?string
    {
        return $this->maskImageId;
    }

    public function setMaskImageId(?string $maskImageId): self
    {
        $this->initialized['maskImageId'] = true;
        $this->maskImageId = $maskImageId;

        return $this;
    }

    public function getMaskFields(): ?string
    {
        return $this->maskFields;
    }

    public function setMaskFields(?string $maskFields): self
    {
        $this->initialized['maskFields'] = true;
        $this->maskFields = $maskFields;

        return $this;
    }

    public function getMaskKey(): ?string
    {
        return $this->maskKey;
    }

    public function setMaskKey(?string $maskKey): self
    {
        $this->initialized['maskKey'] = true;
        $this->maskKey = $maskKey;

        return $this;
    }

    public function getMaskUrl(): ?string
    {
        return $this->maskUrl;
    }

    public function setMaskUrl(?string $maskUrl): self
    {
        $this->initialized['maskUrl'] = true;
        $this->maskUrl = $maskUrl;

        return $this;
    }
}