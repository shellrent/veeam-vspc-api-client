<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateLocationPayload extends AbstractJsonPayload {
	private ?string $organizationUid = null;

	private ?string $name = null;

	private ?int $quotaGb = null;

	public function __construct(
		?string $organizationUid = null,
		?string $name = null,
		?int $quotaGb = null
	) {
		parent::__construct();

		$this->organizationUid = $organizationUid;
		$this->name = $name;
		$this->quotaGb = $quotaGb;
	}

	public function setOrganizationUid(string $organizationUid): self {
		$this->organizationUid = $organizationUid;

		return $this;
	}

	public function setName(string $name): self {
		$this->name = $name;

		return $this;
	}

	public function setQuotaGb(int $quotaGb): self {
		$this->quotaGb = $quotaGb;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'organizationUid' => $this->organizationUid,
			'name' => $this->name,
			'quotaGb' => $this->quotaGb,
		], static fn ($value) => $value !== null);
	}
}
