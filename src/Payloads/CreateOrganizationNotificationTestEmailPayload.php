<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateOrganizationNotificationTestEmailPayload extends AbstractJsonPayload {
        private ?string $from = null;

        private ?string $to = null;

        public function __construct(?string $from = null, ?string $to = null) {
                parent::__construct();

                $this->from = $from;
                $this->to = $to;
        }

        public function setFrom(?string $from): self {
                $this->from = $from;

                return $this;
        }

        public function setTo(?string $to): self {
                $this->to = $to;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'from' => $this->from,
                        'to' => $this->to,
                ], static fn ($value) => $value !== null);
        }
}
