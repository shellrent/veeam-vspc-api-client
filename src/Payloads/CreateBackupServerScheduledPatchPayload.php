<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

use DateTimeInterface;

class CreateBackupServerScheduledPatchPayload extends AbstractJsonPayload {
	private ?array $configuration;

	private ?array $schedule;

	public function __construct(?array $configuration = null, ?array $schedule = null) {
		parent::__construct();

		$this->configuration = $configuration;
		$this->schedule = $schedule;
	}

	public function setConfiguration(?array $configuration): self {
		$this->configuration = $configuration;

		return $this;
	}

	public function useConfiguration(CreateBackupServerPatchPayload $payload): self {
		return $this->setConfiguration($payload->jsonSerialize());
	}

	public function setSchedule(?array $schedule): self {
		$this->schedule = $schedule;

		return $this;
	}

	public function setScheduleDateTime(DateTimeInterface $dateTime): self {
		return $this->setSchedule([
			'dateTime' => $dateTime->format(DateTimeInterface::ATOM),
		]);
	}

	public function jsonSerialize(): array {
		return array_filter([
			'configuration' => $this->configuration,
			'schedule' => $this->schedule,
		], static fn ($value) => $value !== null);
	}
}
