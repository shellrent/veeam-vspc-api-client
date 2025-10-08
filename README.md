# Veeam Service Provider Console API Client

A PHP SDK for integrating with the [Veeam Service Provider Console (VSPC)](https://www.veeam.com/service-provider-console.html) REST API. The library wraps the official OpenAPI specification provided with VSPC v8.1 and offers repositories, request builders, and payload helpers to quickly interact with the console from PHP applications and automation scripts.

## Features
- Guzzle-based HTTP client preconfigured for the VSPC REST endpoints.
- Repository classes mirroring the API tags (Authentication, Companies, Backup Servers, and more).
- Fluent payload builders to compose request bodies for complex operations.
- Helpers for filters, pagination, and query parameters.
- Returns PSR-7 responses or decoded JSON payloads for convenience.

## Requirements
- PHP ^8.1 with the JSON extension enabled.
- Composer for dependency management.
- Access to a VSPC environment (on-premises or hosted) with API credentials.

## Installation
Install the package via Composer:

```bash
composer require shellrent/veeam-vspc-api-client
```

## Getting Started
Create an instance of the SDK by providing the base endpoint of your VSPC installation. The client accepts an optional bearer token and additional [Guzzle client options](https://docs.guzzlephp.org/en/stable/request-options.html).

```php
use Shellrent\VeeamVspcApiClient\VeeamSPCClient;

$client = new VeeamSPCClient(
    endpoint: 'https://vspc.example.com',
    token: null,
    options: [
        // Any Guzzle option (timeouts, proxies, etc.)
    ]
);
```

### Authenticate and Fetch a Token
Use the `AuthenticationRepository` with the `OAuthPayload` helper to request an access token.

```php
use Shellrent\VeeamVspcApiClient\Payloads\OAuthPayload;
use Shellrent\VeeamVspcApiClient\Repositories\AuthenticationRepository;

$authRepository = new AuthenticationRepository();
$request = $authRepository->postOAuthAuthentication(new OAuthPayload('username', 'password'));

$tokenResponse = $client->jsonResponse($request);
$token = $tokenResponse->access_token ?? null;
```

Subsequent requests can be executed by instantiating the client with the retrieved token or by updating the constructor argument.

### Calling Other Endpoints
Each repository maps to an API tag and provides helpers to build the corresponding request.

```php
use Shellrent\VeeamVspcApiClient\Repositories\CompanyRepository;

$companyRepository = new CompanyRepository();
$request = $companyRepository->getCompanies();

$response = $client->jsonResponse($request);
```

Repositories accept optional filters and query parameters when executed through `VeeamSPCClient::send()` or `VeeamSPCClient::jsonResponse()`. You can build complex filters using `Filter` and `FilterCollection` helpers located under `Shellrent\VeeamVspcApiClient\Support`.

## OpenAPI Specification
The official VSPC OpenAPI definition used to generate the SDK is stored in [`openapi/3.5.1/vspc-api.json`](openapi/3.5.1/vspc-api.json). Refer to it for a complete list of available operations, parameters, and payload schemas.

## Contributing
Contributions are welcome! If you plan to submit a pull request:

1. Fork the repository and create a feature branch.
2. Follow the existing coding standards (tabs for indentation, camelCase properties).
3. Update or add documentation when introducing new repositories or payload builders.
4. Ensure your code builds and, when possible, provide usage examples in the PR description.

## License
This project is released under the [MIT License](LICENSE.md).
