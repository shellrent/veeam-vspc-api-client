<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerPatchPayload extends AbstractJsonPayload {
	private ?bool $allowAutoReboot;

	private ?bool $stopAllActivities;

	public function __construct(?bool $allowAutoReboot = null, ?bool $stopAllActivities = null) {
		parent::__construct();

		$this->allowAutoReboot = $allowAutoReboot;
		$this->stopAllActivities = $stopAllActivities;
	}

	public function setAllowAutoReboot(?bool $allowAutoReboot): self {
		$this->allowAutoReboot = $allowAutoReboot;

		return $this;
	}

	public function setStopAllActivities(?bool $stopAllActivities): self {
		$this->stopAllActivities = $stopAllActivities;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'allowAutoReboot' => $this->allowAutoReboot,
			'stopAllActivities' => $this->stopAllActivities,
		], static fn ($value) => $value !== null);
	}
}
