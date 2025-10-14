<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

use DateTimeInterface;
use InvalidArgumentException;

class CreatePulseLicensePayload extends AbstractJsonPayload {
        private ?string $productId = null;

        private ?string $contractId = null;

        private ?string $description = null;

        private ?DateTimeInterface $expirationDate = null;

        private ?bool $isAutomaticReportingEnabled = null;

        /**
         * @var array<int, array{workloadId: string, count: int}>
         */
        private array $workloads = [];

        public function __construct(
                ?string $productId = null,
                ?string $contractId = null,
                ?DateTimeInterface $expirationDate = null
        ) {
                parent::__construct();

                $this->productId = $productId;
                $this->contractId = $contractId;
                $this->expirationDate = $expirationDate;
        }

        public function setProductId(string $productId): self {
                $this->productId = $productId;

                return $this;
        }

        public function setContractId(string $contractId): self {
                $this->contractId = $contractId;

                return $this;
        }

        public function setDescription(?string $description): self {
                $this->description = $description;

                return $this;
        }

        public function setExpirationDate(?DateTimeInterface $expirationDate): self {
                $this->expirationDate = $expirationDate;

                return $this;
        }

        public function setAutomaticReportingEnabled(?bool $enabled): self {
                $this->isAutomaticReportingEnabled = $enabled;

                return $this;
        }

        /**
         * @param array<int, array{workloadId: string, count: int}> $workloads
         */
        public function setWorkloads(array $workloads): self {
                $this->workloads = [];

                foreach ($workloads as $workload) {
                        if (!isset($workload['workloadId'], $workload['count'])) {
                                throw new InvalidArgumentException('Each workload entry must contain "workloadId" and "count" keys.');
                        }

                        $this->addWorkload($workload['workloadId'], $workload['count']);
                }

                return $this;
        }

        public function addWorkload(string $workloadId, int $count): self {
                if ($count < 1) {
                        throw new InvalidArgumentException('Workload count must be greater than or equal to 1.');
                }

                $this->workloads[] = [
                        'workloadId' => $workloadId,
                        'count' => $count,
                ];

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'productId' => $this->productId,
                        'contractId' => $this->contractId,
                        'description' => $this->description,
                        'expirationDate' => $this->expirationDate?->format(DateTimeInterface::ATOM),
                        'isAutomaticReportingEnabled' => $this->isAutomaticReportingEnabled,
                        'workloads' => $this->workloads === [] ? null : array_values($this->workloads),
                ], static fn ($value) => $value !== null);
        }
}
