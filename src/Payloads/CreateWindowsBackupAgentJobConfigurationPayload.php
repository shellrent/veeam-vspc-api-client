<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateWindowsBackupAgentJobConfigurationPayload extends AbstractJsonPayload {
	private array $configuration;

	public function __construct(array $configuration = []) {
		parent::__construct();
		$this->configuration = $configuration;
	}

	public function setConfiguration(array $configuration): self {
		$this->configuration = $configuration;

		return $this;
	}

	public function jsonSerialize(): array {
		return $this->configuration;
	}
}
