<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerIsoPredownloadPayload extends AbstractJsonPayload {
	private ?string $path;

	public function __construct(?string $path = null) {
		parent::__construct();

		$this->path = $path;
	}

	public function setPath(?string $path): self {
		$this->path = $path;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'path' => $this->path,
		], static fn ($value) => $value !== null);
	}
}
