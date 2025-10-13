<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class EditAuthenticationAsymmetricAlgorithmChallengePayload extends GenericPayload {
	private string $decryptedChallenge;

	public function __construct(string $decryptedChallenge, string $contentType = 'application/octet-stream') {
		parent::__construct($contentType);
		$this->decryptedChallenge = $decryptedChallenge;
	}

	public function setDecryptedChallenge(string $decryptedChallenge): self {
		$this->decryptedChallenge = $decryptedChallenge;

		return $this;
	}

	protected function serializeBody(): string {
		return $this->decryptedChallenge;
	}
}
