<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerStandardCredentialsPayload extends AbstractJsonPayload {
	private ?string $username;

	private ?string $password;

	private ?string $description;

	private ?string $mappedOrganizationUid;

	public function __construct(?string $username = null, ?string $password = null, ?string $description = null, ?string $mappedOrganizationUid = null) {
		parent::__construct();

		$this->username = $username;
		$this->password = $password;
		$this->description = $description;
		$this->mappedOrganizationUid = $mappedOrganizationUid;
	}

	public function setUsername(?string $username): self {
		$this->username = $username;

		return $this;
	}

	public function setPassword(?string $password): self {
		$this->password = $password;

		return $this;
	}

	public function setDescription(?string $description): self {
		$this->description = $description;

		return $this;
	}

	public function setMappedOrganizationUid(?string $mappedOrganizationUid): self {
		$this->mappedOrganizationUid = $mappedOrganizationUid;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'username' => $this->username,
			'password' => $this->password,
			'description' => $this->description,
			'mappedOrganizationUid' => $this->mappedOrganizationUid,
		], static fn ($value) => $value !== null);
	}
}
