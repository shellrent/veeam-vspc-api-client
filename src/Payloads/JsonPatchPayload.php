<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

abstract class JsonPatchPayload extends AbstractJsonPayload {
	private const VALUE_UNDEFINED = "__JSON_PATCH_VALUE_UNDEFINED__";

	/**
	 * @var array<int, array<string, mixed>>
	 */
	private array $operations = [];

	public function __construct(array $operations = []) {
		parent::__construct();
		$this->operations = $operations;
	}

	public function addOperation(string $operation, string $path, mixed $value = self::VALUE_UNDEFINED, ?string $from = null): static {
		$payload = [
			'op' => $operation,
			'path' => $path,
		];

		if ($from !== null) {
			$payload['from'] = $from;
		}

		if ($value !== self::VALUE_UNDEFINED) {
			$payload['value'] = $value;
		}

		$this->operations[] = $payload;

		return $this;
	}

	public function setOperations(array $operations): static {
		$this->operations = $operations;

		return $this;
	}

	public function jsonSerialize(): array {
		return $this->operations;
	}
}
