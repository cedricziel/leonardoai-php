<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class PromptRandomPostResponse200PromptGeneration extends \ArrayObject
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
     * The random prompt generated.
     *
     * @var string
     */
    protected $prompt = 'The random prompt generated.';
    /**
     * API Credits Cost for Random Prompt Generation. Available for Production API Users.
     *
     * @var int
     */
    protected $apiCreditCost = 4;

    /**
     * The random prompt generated.
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * The random prompt generated.
     */
    public function setPrompt(string $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;

        return $this;
    }

    /**
     * API Credits Cost for Random Prompt Generation. Available for Production API Users.
     */
    public function getApiCreditCost(): int
    {
        return $this->apiCreditCost;
    }

    /**
     * API Credits Cost for Random Prompt Generation. Available for Production API Users.
     */
    public function setApiCreditCost(int $apiCreditCost): self
    {
        $this->initialized['apiCreditCost'] = true;
        $this->apiCreditCost = $apiCreditCost;

        return $this;
    }
}