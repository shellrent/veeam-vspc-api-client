<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanySiteBackupResourcePayload extends AbstractJsonPayload {
        private ?string $repositoryUid = null;

        private ?string $cloudRepositoryName = null;

        private ?int $storageQuota = null;

        private ?int $serversQuota = null;

        private ?bool $isServersQuotaUnlimited = null;

        private ?int $workstationsQuota = null;

        private ?bool $isWorkstationsQuotaUnlimited = null;

        private ?int $vmsQuota = null;

        private ?bool $isVmsQuotaUnlimited = null;

        private ?bool $isWanAccelerationEnabled = null;

        private ?string $wanAcceleratorUid = null;

        private ?bool $isDefault = null;

        public function __construct(
                ?string $repositoryUid = null,
                ?string $cloudRepositoryName = null,
                ?int $storageQuota = null
        ) {
                parent::__construct();

                $this->repositoryUid = $repositoryUid;
                $this->cloudRepositoryName = $cloudRepositoryName;
                $this->storageQuota = $storageQuota;
        }

        public function setRepositoryUid(?string $repositoryUid): self {
                $this->repositoryUid = $repositoryUid;

                return $this;
        }

        public function setCloudRepositoryName(?string $cloudRepositoryName): self {
                $this->cloudRepositoryName = $cloudRepositoryName;

                return $this;
        }

        public function setStorageQuota(?int $storageQuota): self {
                $this->storageQuota = $storageQuota;

                return $this;
        }

        public function setServersQuota(?int $serversQuota): self {
                $this->serversQuota = $serversQuota;

                return $this;
        }

        public function setIsServersQuotaUnlimited(?bool $isServersQuotaUnlimited): self {
                $this->isServersQuotaUnlimited = $isServersQuotaUnlimited;

                return $this;
        }

        public function setWorkstationsQuota(?int $workstationsQuota): self {
                $this->workstationsQuota = $workstationsQuota;

                return $this;
        }

        public function setIsWorkstationsQuotaUnlimited(?bool $isWorkstationsQuotaUnlimited): self {
                $this->isWorkstationsQuotaUnlimited = $isWorkstationsQuotaUnlimited;

                return $this;
        }

        public function setVmsQuota(?int $vmsQuota): self {
                $this->vmsQuota = $vmsQuota;

                return $this;
        }

        public function setIsVmsQuotaUnlimited(?bool $isVmsQuotaUnlimited): self {
                $this->isVmsQuotaUnlimited = $isVmsQuotaUnlimited;

                return $this;
        }

        public function setIsWanAccelerationEnabled(?bool $isWanAccelerationEnabled): self {
                $this->isWanAccelerationEnabled = $isWanAccelerationEnabled;

                return $this;
        }

        public function setWanAcceleratorUid(?string $wanAcceleratorUid): self {
                $this->wanAcceleratorUid = $wanAcceleratorUid;

                return $this;
        }

        public function setIsDefault(?bool $isDefault): self {
                $this->isDefault = $isDefault;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'repositoryUid' => $this->repositoryUid,
                        'cloudRepositoryName' => $this->cloudRepositoryName,
                        'storageQuota' => $this->storageQuota,
                        'serversQuota' => $this->serversQuota,
                        'isServersQuotaUnlimited' => $this->isServersQuotaUnlimited,
                        'workstationsQuota' => $this->workstationsQuota,
                        'isWorkstationsQuotaUnlimited' => $this->isWorkstationsQuotaUnlimited,
                        'vmsQuota' => $this->vmsQuota,
                        'isVmsQuotaUnlimited' => $this->isVmsQuotaUnlimited,
                        'isWanAccelerationEnabled' => $this->isWanAccelerationEnabled,
                        'wanAcceleratorUid' => $this->wanAcceleratorUid,
                        'isDefault' => $this->isDefault,
                ], static fn ($value) => $value !== null);
        }
}
