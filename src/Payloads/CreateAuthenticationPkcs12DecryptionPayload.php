<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateAuthenticationPkcs12DecryptionPayload extends AbstractJsonPayload {
	private string $certificateContent;

	private ?string $password;

	public function __construct(string $certificateContent, ?string $password = null) {
		parent::__construct();

		$this->certificateContent = $certificateContent;
		$this->password = $password;
	}

	public function setCertificateContent(string $certificateContent): self {
		$this->certificateContent = $certificateContent;

		return $this;
	}

	public function setPassword(?string $password): self {
		$this->password = $password;

		return $this;
	}

	public function jsonSerialize(): array {
	$payload = [
			'certificateContent' => $this->certificateContent,
	];

	if ($this->password !== null) {
		$payload['password'] = $this->password;
	}

	return $payload;
	}
}
