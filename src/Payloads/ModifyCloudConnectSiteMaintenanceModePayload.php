<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

use JsonException;

class ModifyCloudConnectSiteMaintenanceModePayload extends GenericPayload {
        private bool $isEnabled;

        public function __construct(bool $isEnabled) {
                parent::__construct('application/json');
                $this->isEnabled = $isEnabled;
        }

        public static function forEnabled(): self {
                return new self(true);
        }

        public static function forDisabled(): self {
                return new self(false);
        }

        public function setEnabled(bool $isEnabled): self {
                $this->isEnabled = $isEnabled;

                return $this;
        }

        public function enable(): self {
                $this->isEnabled = true;

                return $this;
        }

        public function disable(): self {
                $this->isEnabled = false;

                return $this;
        }

        /**
         * @throws JsonException
         */
        protected function serializeBody(): string {
                return json_encode($this->isEnabled, JSON_THROW_ON_ERROR);
        }
}
