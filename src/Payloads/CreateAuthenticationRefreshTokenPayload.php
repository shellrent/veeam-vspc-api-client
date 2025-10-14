<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateAuthenticationRefreshTokenPayload extends AbstractMultipartFormDataPayload {
	private string $refreshToken;

	public function __construct(string $refreshToken, ?string $boundary = null) {
		parent::__construct($boundary);
		$this->refreshToken = $refreshToken;
	}

	public function setRefreshToken(string $refreshToken): self {
		$this->refreshToken = $refreshToken;

		return $this;
	}

	protected function formFields(): array {
		return [
			'refreshToken' => $this->refreshToken,
		];
	}
}
