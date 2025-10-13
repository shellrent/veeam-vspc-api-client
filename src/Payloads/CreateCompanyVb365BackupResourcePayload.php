<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyVb365BackupResourcePayload extends AbstractJsonPayload {
        private ?string $repositoryUid = null;

        private ?string $proxyUid = null;

        private ?string $proxyPoolUid = null;

        private ?int $usersQuota = null;

        private ?bool $isUsersQuotaUnlimited = null;

        private ?int $storageQuota = null;

        private ?bool $isStorageQuotaUnlimited = null;

        public function __construct(
                ?string $repositoryUid = null,
                ?string $proxyUid = null,
                ?string $proxyPoolUid = null,
                ?int $usersQuota = null,
                ?bool $isUsersQuotaUnlimited = null,
                ?int $storageQuota = null,
                ?bool $isStorageQuotaUnlimited = null
        ) {
                parent::__construct();

                $this->repositoryUid = $repositoryUid;
                $this->proxyUid = $proxyUid;
                $this->proxyPoolUid = $proxyPoolUid;
                $this->usersQuota = $usersQuota;
                $this->isUsersQuotaUnlimited = $isUsersQuotaUnlimited;
                $this->storageQuota = $storageQuota;
                $this->isStorageQuotaUnlimited = $isStorageQuotaUnlimited;
        }

        public function setRepositoryUid(?string $repositoryUid): self {
                $this->repositoryUid = $repositoryUid;

                return $this;
        }

        public function setProxyUid(?string $proxyUid): self {
                $this->proxyUid = $proxyUid;

                return $this;
        }

        public function setProxyPoolUid(?string $proxyPoolUid): self {
                $this->proxyPoolUid = $proxyPoolUid;

                return $this;
        }

        public function setUsersQuota(?int $usersQuota): self {
                $this->usersQuota = $usersQuota;

                return $this;
        }

        public function setIsUsersQuotaUnlimited(?bool $isUsersQuotaUnlimited): self {
                $this->isUsersQuotaUnlimited = $isUsersQuotaUnlimited;

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
                        'proxyUid' => $this->proxyUid,
                        'proxyPoolUid' => $this->proxyPoolUid,
                        'usersQuota' => $this->usersQuota,
                        'isUsersQuotaUnlimited' => $this->isUsersQuotaUnlimited,
                        'storageQuota' => $this->storageQuota,
                        'isStorageQuotaUnlimited' => $this->isStorageQuotaUnlimited,
                ], static fn ($value) => $value !== null);
        }
}
