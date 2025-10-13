<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanySiteVcdReplicationResourcePayload extends AbstractJsonPayload {
        /**
         * @var array<int, array<string, mixed>>|null
         */
        private ?array $dataCenters = null;

        private ?bool $isFailoverCapabilitiesEnabled = null;

        /**
         * @param array<int, array<string, mixed>>|null $dataCenters
         */
        public function __construct(?array $dataCenters = null) {
                parent::__construct();

                $this->dataCenters = $dataCenters;
        }

        /**
         * @param array<int, array<string, mixed>>|null $dataCenters
         */
        public function setDataCenters(?array $dataCenters): self {
                $this->dataCenters = $dataCenters;

                return $this;
        }

        public function setIsFailoverCapabilitiesEnabled(?bool $isFailoverCapabilitiesEnabled): self {
                $this->isFailoverCapabilitiesEnabled = $isFailoverCapabilitiesEnabled;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'dataCenters' => $this->dataCenters,
                        'isFailoverCapabilitiesEnabled' => $this->isFailoverCapabilitiesEnabled,
                ], static fn ($value) => $value !== null);
        }
}
