<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyHostedVbrBackupResourcePayload extends AbstractJsonPayload {
        private ?string $repositoryUid = null;

        private ?int $storageQuota = null;

        private ?bool $isStorageQuotaUnlimited = null;

        public function __construct(
                ?string $repositoryUid = null,
                ?int $storageQuota = null,
                ?bool $isStorageQuotaUnlimited = null
        ) {
                parent::__construct();

                $this->repositoryUid = $repositoryUid;
                $this->storageQuota = $storageQuota;
                $this->isStorageQuotaUnlimited = $isStorageQuotaUnlimited;
        }

        public function setRepositoryUid(?string $repositoryUid): self {
                $this->repositoryUid = $repositoryUid;

                return $this;
        }

        public function setStorageQuota(?int $storageQuota): self {
                $this->storageQuota = $storageQuota;

                return $this;
        }

        public function setIsStorageQuotaUnlimited(?bool $isStorageQuotaUnlimited): self {
                $this->isStorageQuotaUnlimited = $isStorageQuotaUnlimited;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'repositoryUid' => $this->repositoryUid,
                        'storageQuota' => $this->storageQuota,
                        'isStorageQuotaUnlimited' => $this->isStorageQuotaUnlimited,
                ], static fn ($value) => $value !== null);
        }
}
