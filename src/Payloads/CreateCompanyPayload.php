<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyPayload extends AbstractJsonPayload {
        private ?string $resellerUid = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $organizationInput = null;

        private ?string $subscriptionPlanUid = null;

        /**
         * @var string[]|null
         */
        private ?array $permissions = null;

        private ?bool $isAlarmDetectEnabled = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $companyServices = null;

        public function __construct(
                ?array $organizationInput = null,
                ?string $resellerUid = null,
                ?string $subscriptionPlanUid = null,
                ?array $permissions = null,
                ?bool $isAlarmDetectEnabled = null,
                ?array $companyServices = null
        ) {
                parent::__construct();

                $this->organizationInput = $organizationInput;
                $this->resellerUid = $resellerUid;
                $this->subscriptionPlanUid = $subscriptionPlanUid;
                $this->permissions = $permissions;
                $this->isAlarmDetectEnabled = $isAlarmDetectEnabled;
                $this->companyServices = $companyServices;
        }

        public function setResellerUid(?string $resellerUid): self {
                $this->resellerUid = $resellerUid;

                return $this;
        }

        /**
         * @param array<string, mixed> $organizationInput
         */
        public function setOrganizationInput(array $organizationInput): self {
                $this->organizationInput = $organizationInput;

                return $this;
        }

        public function setSubscriptionPlanUid(?string $subscriptionPlanUid): self {
                $this->subscriptionPlanUid = $subscriptionPlanUid;

                return $this;
        }

        /**
         * @param string[]|null $permissions
         */
        public function setPermissions(?array $permissions): self {
                $this->permissions = $permissions;

                return $this;
        }

        public function setIsAlarmDetectEnabled(?bool $isAlarmDetectEnabled): self {
                $this->isAlarmDetectEnabled = $isAlarmDetectEnabled;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $companyServices
         */
        public function setCompanyServices(?array $companyServices): self {
                $this->companyServices = $companyServices;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'resellerUid' => $this->resellerUid,
                        'organizationInput' => $this->organizationInput,
                        'subscriptionPlanUid' => $this->subscriptionPlanUid,
                        'permissions' => $this->permissions,
                        'isAlarmDetectEnabled' => $this->isAlarmDetectEnabled,
                        'companyServices' => $this->companyServices,
                ], static fn ($value) => $value !== null);
        }
}
