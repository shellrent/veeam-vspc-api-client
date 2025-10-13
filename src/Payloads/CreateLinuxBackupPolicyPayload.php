<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateLinuxBackupPolicyPayload extends AbstractJsonPayload {
        private array $policy;

        public function __construct(array $policy = []) {
                parent::__construct();
                $this->policy = $policy;
        }

        public function setPolicy(array $policy): self {
                $this->policy = $policy;

                return $this;
        }

        public function jsonSerialize(): array {
                return $this->policy;
        }
}
