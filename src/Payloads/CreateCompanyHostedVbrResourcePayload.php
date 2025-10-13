<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyHostedVbrResourcePayload extends AbstractJsonPayload {
        private ?string $serverUid = null;

        private ?string $friendlyName = null;

        private ?bool $isJobSchedulingEnabled = null;

        public function __construct(
                ?string $serverUid = null,
                ?string $friendlyName = null,
                ?bool $isJobSchedulingEnabled = null
        ) {
                parent::__construct();

                $this->serverUid = $serverUid;
                $this->friendlyName = $friendlyName;
                $this->isJobSchedulingEnabled = $isJobSchedulingEnabled;
        }

        public function setServerUid(?string $serverUid): self {
                $this->serverUid = $serverUid;

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
                        'serverUid' => $this->serverUid,
                        'friendlyName' => $this->friendlyName,
                        'isJobSchedulingEnabled' => $this->isJobSchedulingEnabled,
                ], static fn ($value) => $value !== null);
        }
}
