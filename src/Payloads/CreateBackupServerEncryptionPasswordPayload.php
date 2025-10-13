<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerEncryptionPasswordPayload extends AbstractJsonPayload {
	private ?string $password;

	private ?string $uniqueId;

	private ?string $hint;

	private ?string $mappedOrganizationUid;

	private ?string $mappedOrganizationName;

	public function __construct(?string $password = null, ?string $hint = null) {
		parent::__construct();

		$this->password = $password;
		$this->uniqueId = null;
		$this->hint = $hint;
		$this->mappedOrganizationUid = null;
		$this->mappedOrganizationName = null;
	}

	public function setPassword(?string $password): self {
		$this->password = $password;

		return $this;
	}

	public function setUniqueId(?string $uniqueId): self {
		$this->uniqueId = $uniqueId;

		return $this;
	}

	public function setHint(?string $hint): self {
		$this->hint = $hint;

		return $this;
	}

	public function setMappedOrganizationUid(?string $mappedOrganizationUid): self {
		$this->mappedOrganizationUid = $mappedOrganizationUid;

		return $this;
	}

	public function setMappedOrganizationName(?string $mappedOrganizationName): self {
		$this->mappedOrganizationName = $mappedOrganizationName;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'password' => $this->password,
			'uniqueId' => $this->uniqueId,
			'hint' => $this->hint,
			'mappedOrganizationUid' => $this->mappedOrganizationUid,
			'mappedOrganizationName' => $this->mappedOrganizationName,
		], static fn ($value) => $value !== null);
	}
}
