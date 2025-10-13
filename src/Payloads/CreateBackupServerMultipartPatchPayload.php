<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerMultipartPatchPayload extends AbstractJsonPayload {
	private array $files;

	private ?string $action;

	private ?bool $stopAllActivities;

	private ?bool $rebootAutomatically;

	public function __construct(array $files = [], ?string $action = null, ?bool $stopAllActivities = null, ?bool $rebootAutomatically = null) {
		parent::__construct();

		$this->files = $files;
		$this->action = $action;
		$this->stopAllActivities = $stopAllActivities;
		$this->rebootAutomatically = $rebootAutomatically;
	}

	public function setFiles(array $files): self {
		$this->files = $files;

		return $this;
	}

	public function addFile(string $name, int $fileSize, ?string $targetDirectory = null): self {
		$file = [
			'name' => $name,
			'fileSize' => $fileSize,
		];

		if ($targetDirectory !== null) {
			$file['targetDirectory'] = $targetDirectory;
		}

		$this->files[] = $file;

		return $this;
	}

	public function setAction(?string $action): self {
		$this->action = $action;

		return $this;
	}

	public function setStopAllActivities(?bool $stopAllActivities): self {
		$this->stopAllActivities = $stopAllActivities;

		return $this;
	}

	public function setRebootAutomatically(?bool $rebootAutomatically): self {
		$this->rebootAutomatically = $rebootAutomatically;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'files' => array_values($this->files),
			'action' => $this->action,
			'stopAllActivities' => $this->stopAllActivities,
			'rebootAutomatically' => $this->rebootAutomatically,
		], static fn ($value) => $value !== null);
	}
}
