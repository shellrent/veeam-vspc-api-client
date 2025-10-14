<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanySiteResourcePayload extends AbstractJsonPayload {
        private ?string $siteUid = null;

        private ?string $cloudTenantType = null;

        private ?string $vCloudOrganizationUid = null;

        private ?bool $leaseExpirationEnabled = null;

        private ?string $leaseExpirationDate = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $ownerCredentials = null;

        private ?string $description = null;

        private ?bool $throttlingEnabled = null;

        private ?int $throttlingValue = null;

        private ?string $throttlingUnit = null;

        private ?int $maxConcurrentTask = null;

        private ?bool $backupProtectionEnabled = null;

        private ?int $backupProtectionPeriodDays = null;

        private ?string $gatewaySelectionType = null;

        /**
         * @var string[]|null
         */
        private ?array $gatewayPoolsUids = null;

        private ?bool $isGatewayFailoverEnabled = null;

        public function __construct(
                ?string $siteUid = null,
                ?array $ownerCredentials = null
        ) {
                parent::__construct();

                $this->siteUid = $siteUid;
                $this->ownerCredentials = $ownerCredentials;
        }

        public function setSiteUid(?string $siteUid): self {
                $this->siteUid = $siteUid;

                return $this;
        }

        public function setCloudTenantType(?string $cloudTenantType): self {
                $this->cloudTenantType = $cloudTenantType;

                return $this;
        }

        public function setVCloudOrganizationUid(?string $vCloudOrganizationUid): self {
                $this->vCloudOrganizationUid = $vCloudOrganizationUid;

                return $this;
        }

        public function setLeaseExpirationEnabled(?bool $leaseExpirationEnabled): self {
                $this->leaseExpirationEnabled = $leaseExpirationEnabled;

                return $this;
        }

        public function setLeaseExpirationDate(?string $leaseExpirationDate): self {
                $this->leaseExpirationDate = $leaseExpirationDate;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $ownerCredentials
         */
        public function setOwnerCredentials(?array $ownerCredentials): self {
                $this->ownerCredentials = $ownerCredentials;

                return $this;
        }

        public function setDescription(?string $description): self {
                $this->description = $description;

                return $this;
        }

        public function setThrottlingEnabled(?bool $throttlingEnabled): self {
                $this->throttlingEnabled = $throttlingEnabled;

                return $this;
        }

        public function setThrottlingValue(?int $throttlingValue): self {
                $this->throttlingValue = $throttlingValue;

                return $this;
        }

        public function setThrottlingUnit(?string $throttlingUnit): self {
                $this->throttlingUnit = $throttlingUnit;

                return $this;
        }

        public function setMaxConcurrentTask(?int $maxConcurrentTask): self {
                $this->maxConcurrentTask = $maxConcurrentTask;

                return $this;
        }

        public function setBackupProtectionEnabled(?bool $backupProtectionEnabled): self {
                $this->backupProtectionEnabled = $backupProtectionEnabled;

                return $this;
        }

        public function setBackupProtectionPeriodDays(?int $backupProtectionPeriodDays): self {
                $this->backupProtectionPeriodDays = $backupProtectionPeriodDays;

                return $this;
        }

        public function setGatewaySelectionType(?string $gatewaySelectionType): self {
                $this->gatewaySelectionType = $gatewaySelectionType;

                return $this;
        }

        /**
         * @param string[]|null $gatewayPoolsUids
         */
        public function setGatewayPoolsUids(?array $gatewayPoolsUids): self {
                $this->gatewayPoolsUids = $gatewayPoolsUids;

                return $this;
        }

        public function setIsGatewayFailoverEnabled(?bool $isGatewayFailoverEnabled): self {
                $this->isGatewayFailoverEnabled = $isGatewayFailoverEnabled;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'siteUid' => $this->siteUid,
                        'cloudTenantType' => $this->cloudTenantType,
                        'vCloudOrganizationUid' => $this->vCloudOrganizationUid,
                        'leaseExpirationEnabled' => $this->leaseExpirationEnabled,
                        'leaseExpirationDate' => $this->leaseExpirationDate,
                        'ownerCredentials' => $this->ownerCredentials,
                        'description' => $this->description,
                        'throttlingEnabled' => $this->throttlingEnabled,
                        'throttlingValue' => $this->throttlingValue,
                        'throttlingUnit' => $this->throttlingUnit,
                        'maxConcurrentTask' => $this->maxConcurrentTask,
                        'backupProtectionEnabled' => $this->backupProtectionEnabled,
                        'backupProtectionPeriodDays' => $this->backupProtectionPeriodDays,
                        'gatewaySelectionType' => $this->gatewaySelectionType,
                        'gatewayPoolsUids' => $this->gatewayPoolsUids,
                        'isGatewayFailoverEnabled' => $this->isGatewayFailoverEnabled,
                ], static fn ($value) => $value !== null);
        }
}
