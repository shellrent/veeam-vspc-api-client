<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateVb365OrganizationCompanyMappingPayload extends AbstractJsonPayload {
        private ?string $vb365OrganizationUid = null;

        private ?string $companyUid = null;

        public function __construct(?string $vb365OrganizationUid = null, ?string $companyUid = null) {
                parent::__construct();

                $this->vb365OrganizationUid = $vb365OrganizationUid;
                $this->companyUid = $companyUid;
        }

        public function setVb365OrganizationUid(?string $vb365OrganizationUid): self {
                $this->vb365OrganizationUid = $vb365OrganizationUid;

                return $this;
        }

        public function setCompanyUid(?string $companyUid): self {
                $this->companyUid = $companyUid;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'vb365OrganizationUid' => $this->vb365OrganizationUid,
                        'companyUid' => $this->companyUid,
                ], static fn ($value) => $value !== null);
        }
}
