<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateAuthenticationAsymmetricAlgorithmChallengePayload extends GenericPayload {
	private string $publicKey;

	public function __construct(string $publicKey, string $contentType = 'application/octet-stream') {
		parent::__construct($contentType);
		$this->publicKey = $publicKey;
	}

	public function setPublicKey(string $publicKey): self {
		$this->publicKey = $publicKey;

		return $this;
	}

	protected function serializeBody(): string {
		return $this->publicKey;
	}
}
