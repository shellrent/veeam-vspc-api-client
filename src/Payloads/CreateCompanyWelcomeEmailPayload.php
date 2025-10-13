<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyWelcomeEmailPayload extends AbstractJsonPayload {
        private ?string $password = null;

        public function __construct(?string $password = null) {
                parent::__construct();

                $this->password = $password;
        }

        public function setPassword(?string $password): self {
                $this->password = $password;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'password' => $this->password,
                ], static fn ($value) => $value !== null);
        }
}
