<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateAuthenticationOAuthTokenPayload extends AbstractFormUrlEncodedPayload {
	private string $grantType;

	private ?string $username;

	private ?string $password;

	private ?string $refreshToken;

	private ?string $mfaToken;

	private ?string $mfaCode;

	private ?string $code;

	private ?string $publicKey;

	private ?string $userUid;

	public function __construct(
		string $grantType = 'password',
		?string $username = null,
		?string $password = null,
		?string $refreshToken = null,
		?string $mfaToken = null,
		?string $mfaCode = null,
		?string $code = null,
		?string $publicKey = null,
		?string $userUid = null
	) {
		parent::__construct();

		$this->grantType = $grantType;
		$this->username = $username;
		$this->password = $password;
		$this->refreshToken = $refreshToken;
		$this->mfaToken = $mfaToken;
		$this->mfaCode = $mfaCode;
		$this->code = $code;
		$this->publicKey = $publicKey;
		$this->userUid = $userUid;
	}

	public function setGrantType(string $grantType): self {
		$this->grantType = $grantType;

		return $this;
	}

	public function setUsername(?string $username): self {
		$this->username = $username;

		return $this;
	}

	public function setPassword(?string $password): self {
		$this->password = $password;

		return $this;
	}

	public function setRefreshToken(?string $refreshToken): self {
		$this->refreshToken = $refreshToken;

		return $this;
	}

	public function setMfaToken(?string $mfaToken): self {
		$this->mfaToken = $mfaToken;

		return $this;
	}

	public function setMfaCode(?string $mfaCode): self {
		$this->mfaCode = $mfaCode;

		return $this;
	}

	public function setCode(?string $code): self {
		$this->code = $code;

		return $this;
	}

	public function setPublicKey(?string $publicKey): self {
		$this->publicKey = $publicKey;

		return $this;
	}

	public function setUserUid(?string $userUid): self {
		$this->userUid = $userUid;

		return $this;
	}

	protected function formFields(): array {
		return [
			'grant_type' => $this->grantType,
			'username' => $this->username,
			'password' => $this->password,
			'refresh_token' => $this->refreshToken,
			'mfa_token' => $this->mfaToken,
			'mfa_code' => $this->mfaCode,
			'code' => $this->code,
			'public_key' => $this->publicKey,
			'userUid' => $this->userUid,
		];
	}
}
