<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateAuthenticationUsernamePasswordPayload extends AbstractMultipartFormDataPayload {
	private string $username;

	private string $password;

	public function __construct(string $username, string $password, ?string $boundary = null) {
		parent::__construct($boundary);

		$this->username = $username;
		$this->password = $password;
	}

	public function setUsername(string $username): self {
		$this->username = $username;

		return $this;
	}

	public function setPassword(string $password): self {
		$this->password = $password;

		return $this;
	}

	protected function formFields(): array {
		return [
			'username' => $this->username,
			'password' => $this->password,
		];
	}
}
