<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerVirtualCenterObjectsExpansionPayload extends AbstractJsonPayload {
	private array $objects;

	public function __construct(array $objects = []) {
		parent::__construct();

		$this->objects = $objects;
	}

	public function setObjects(array $objects): self {
		$this->objects = $objects;

		return $this;
	}

	public function addInventoryObject(array $inventoryObject, ?string $size = null): self {
		$entry = [
			'inventoryObject' => $inventoryObject,
		];

		if ($size !== null) {
			$entry['size'] = $size;
		}

		$this->objects[] = $entry;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_values($this->objects);
	}
}
