<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerVcdObjectsExpansionPayload extends AbstractJsonPayload {
	private array $objects;

	public function __construct(array $objects = []) {
		parent::__construct();

		$this->objects = $objects;
	}

	public function setObjects(array $objects): self {
		$this->objects = $objects;

		return $this;
	}

	public function addObject(array $object): self {
		$this->objects[] = $object;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_values($this->objects);
	}
}
