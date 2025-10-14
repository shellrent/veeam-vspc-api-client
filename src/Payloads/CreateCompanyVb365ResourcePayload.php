<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyVb365ResourcePayload extends AbstractJsonPayload {
        private ?string $vb365ServerUid = null;

        private ?string $friendlyName = null;

        private ?bool $isJobSchedulingEnabled = null;

        public function __construct(
                ?string $vb365ServerUid = null,
                ?string $friendlyName = null,
                ?bool $isJobSchedulingEnabled = null
        ) {
                parent::__construct();

                $this->vb365ServerUid = $vb365ServerUid;
                $this->friendlyName = $friendlyName;
                $this->isJobSchedulingEnabled = $isJobSchedulingEnabled;
        }

        public function setVb365ServerUid(?string $vb365ServerUid): self {
                $this->vb365ServerUid = $vb365ServerUid;

                return $this;
        }

        public function setFriendlyName(?string $friendlyName): self {
                $this->friendlyName = $friendlyName;

                return $this;
        }

        public function setIsJobSchedulingEnabled(?bool $isJobSchedulingEnabled): self {
                $this->isJobSchedulingEnabled = $isJobSchedulingEnabled;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'vb365ServerUid' => $this->vb365ServerUid,
                        'friendlyName' => $this->friendlyName,
                        'isJobSchedulingEnabled' => $this->isJobSchedulingEnabled,
                ], static fn ($value) => $value !== null);
        }
}
