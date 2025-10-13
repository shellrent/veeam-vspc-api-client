<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateAuthenticationAsymmetricAlgorithmChallengePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateAuthenticationOAuthTokenPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateAuthenticationPkcs12DecryptionPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateAuthenticationRefreshTokenPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateAuthenticationUsernamePasswordPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditAuthenticationAsymmetricAlgorithmChallengePayload;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class AuthenticationRepository implements Repository {
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return '';
	}

	/**
	 * Obtain Tokens for Decrypted Challenge Issues access and refresh tokens in response to a decrypted challenge. > Operation is deprecated. We recommend to authorize using the `/token` endpoint.
	 * Path: /authentication/asymmetricalgorithm
	 */
	public function asymmetricAlgorithmCompleteChallenge(EditAuthenticationAsymmetricAlgorithmChallengePayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest('/authentication/asymmetricalgorithm', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Generate Asymmetric Authentication Challenge Generates a decryption challenge for the specified public key. The challenge must be decrypted in 30 seconds. > Operation is deprecated. We recommend to authorize using the `/users/{userUid}/logins/apikey` or `/token` endpoint.
	 * Path: /authentication/asymmetricalgorithm
	 */
	public function asymmetricAlgorithmChallenge(CreateAuthenticationAsymmetricAlgorithmChallengePayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/authentication/asymmetricalgorithm', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Obtain RSA Keys Issues an RSA key pair. > You can specify the key size if needed.
	 * Path: /authentication/keys/rsa
	 */
	public function generateNewRsaKeyPair(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/authentication/keys/rsa');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Issues a PKCS#12 container with an RSA private key and an X.509 certificate.
	 * Path: /authentication/keys/rsa-pkcs12
	 */
	public function generateNewPkcs12KeyPair(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/authentication/keys/rsa-pkcs12');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Decrypts an encrypted PKCS#12 container. > If container does not include private key the server will return an error with the `1210` code.
	 * Path: /authentication/keys/rsa-pkcs12/decrypt
	 */
	public function decryptPkcs12Container(CreateAuthenticationPkcs12DecryptionPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/authentication/keys/rsa-pkcs12/decrypt', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Obtain TOTP Secret Issues a TOTP secret and a URL-encoded secret.
	 * Path: /authentication/keys/totp-secret
	 */
	public function generateTotpSecret(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/authentication/keys/totp-secret');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Obtain New Pair of Tokens Returns access and refresh tokens in response to refresh token. > Operation is deprecated. We recommend to authorize using the `/token` endpoint.
	 * Path: /authentication/refresh
	 */
	public function refreshTokenAuthenticate(CreateAuthenticationRefreshTokenPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/authentication/refresh', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Authenticate with User Name and Password Issues access and refresh tokens for the specified user name and password. > Operation is deprecated. We recommend to authorize using the `/token` endpoint.
	 * Path: /authentication/usernamepassword
	 */
	public function usernamePasswordAuthenticate(CreateAuthenticationUsernamePasswordPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/authentication/usernamepassword', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * OAuth 2.0 Authentication Performs authentication using the OAuth 2.0 Authorization Framework.
	 * Path: /token
	 */
	public function oAuth2IssueToken(CreateAuthenticationOAuthTokenPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/token', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
