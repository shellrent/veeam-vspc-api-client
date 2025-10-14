<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyHostedVbrTagResourcePayload extends AbstractJsonPayload {
        private ?string $virtualCenterUid = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $virtualServerTag = null;

        public function __construct(?string $virtualCenterUid = null, ?array $virtualServerTag = null) {
                parent::__construct();

                $this->virtualCenterUid = $virtualCenterUid;
                $this->virtualServerTag = $virtualServerTag;
        }

        public function setVirtualCenterUid(?string $virtualCenterUid): self {
                $this->virtualCenterUid = $virtualCenterUid;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $virtualServerTag
         */
        public function setVirtualServerTag(?array $virtualServerTag): self {
                $this->virtualServerTag = $virtualServerTag;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'virtualCenterUid' => $this->virtualCenterUid,
                        'virtualServerTag' => $this->virtualServerTag,
                ], static fn ($value) => $value !== null);
        }
}
