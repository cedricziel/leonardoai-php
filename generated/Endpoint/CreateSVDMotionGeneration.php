<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Endpoint;

class CreateSVDMotionGeneration extends \CedricZiel\LeonardoAI\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\LeonardoAI\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\LeonardoAI\Generated\Runtime\Client\EndpointTrait;

    /**
     * This endpoint will generate a SVD motion generation.
     */
    public function __construct(?\CedricZiel\LeonardoAI\Generated\Model\GenerationsMotionSvdPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/generations-motion-svd';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\LeonardoAI\Generated\Model\GenerationsMotionSvdPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \CedricZiel\LeonardoAI\Generated\Model\GenerationsMotionSvdPostResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CedricZiel\LeonardoAI\Generated\Model\GenerationsMotionSvdPostResponse200', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}