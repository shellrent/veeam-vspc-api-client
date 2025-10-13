<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanySiteReplicationResourcePayload extends AbstractJsonPayload {
        /**
         * @var array<int, array<string, mixed>>|null
         */
        private ?array $hardwarePlans = null;

        private ?bool $isFailoverCapabilitiesEnabled = null;

        private ?bool $isPublicAllocationEnabled = null;

        private ?int $numberOfPublicIps = null;

        /**
         * @param array<int, array<string, mixed>>|null $hardwarePlans
         */
        public function __construct(?array $hardwarePlans = null) {
                parent::__construct();

                $this->hardwarePlans = $hardwarePlans;
        }

        /**
         * @param array<int, array<string, mixed>>|null $hardwarePlans
         */
        public function setHardwarePlans(?array $hardwarePlans): self {
                $this->hardwarePlans = $hardwarePlans;

                return $this;
        }

        public function setIsFailoverCapabilitiesEnabled(?bool $isFailoverCapabilitiesEnabled): self {
                $this->isFailoverCapabilitiesEnabled = $isFailoverCapabilitiesEnabled;

                return $this;
        }

        public function setIsPublicAllocationEnabled(?bool $isPublicAllocationEnabled): self {
                $this->isPublicAllocationEnabled = $isPublicAllocationEnabled;

                return $this;
        }

        public function setNumberOfPublicIps(?int $numberOfPublicIps): self {
                $this->numberOfPublicIps = $numberOfPublicIps;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'hardwarePlans' => $this->hardwarePlans,
                        'isFailoverCapabilitiesEnabled' => $this->isFailoverCapabilitiesEnabled,
                        'isPublicAllocationEnabled' => $this->isPublicAllocationEnabled,
                        'numberOfPublicIps' => $this->numberOfPublicIps,
                ], static fn ($value) => $value !== null);
        }
}
