<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Endpoint;

class Get3DModelsByUserId extends \CedricZiel\LeonardoAI\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\LeonardoAI\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\LeonardoAI\Generated\Runtime\Client\EndpointTrait;
    protected $userId;

    /**
     * This endpoint returns all 3D models by a specific user.
     *
     * @param array $queryParameters {
     *
     * @var int $offset
     * @var int $limit
     *          }
     */
    public function __construct(string $userId, ?\CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetBody $requestBody = null, array $queryParameters = [])
    {
        $this->userId = $userId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{userId}'], [$this->userId], '/models-3d/user/{userId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 10]);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}