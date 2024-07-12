# leonardoai-php

Leonardo AI SDK for PHP

## Install

```bash
composer require cedricziel/leonardoai-php
```

## Usage

You need an API key from Leonardo

### Client creation

```php
$authenticationRegistry = new AuthenticationRegistry([new ApiKeyAuthentication('my-api-key')]);
$client = Client::create(null, [$authenticationRegistry]);
```

### Get current user

```php
$client->getUserSelf();
```

### Image Generation: Create

```php
$body = GenerationsPostBody();
$body->setPrompt('A cat on a tree');
$res = $client->createGeneration($body);
```

## License

MIT
