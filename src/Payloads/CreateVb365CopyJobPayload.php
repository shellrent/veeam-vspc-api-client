<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateVb365CopyJobPayload extends AbstractJsonPayload {
        private string $sourceBackupJobUid;

        private string $repositoryUid;

        private ?bool $isEnabled = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $schedulePolicy = null;

        public function __construct(string $sourceBackupJobUid, string $repositoryUid) {
                parent::__construct();

                $this->sourceBackupJobUid = $sourceBackupJobUid;
                $this->repositoryUid = $repositoryUid;
        }

        public function setIsEnabled(?bool $isEnabled): self {
                $this->isEnabled = $isEnabled;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $schedulePolicy
         */
        public function setSchedulePolicy(?array $schedulePolicy): self {
                $this->schedulePolicy = $schedulePolicy;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'sourceBackupJobUid' => $this->sourceBackupJobUid,
                        'repositoryUid' => $this->repositoryUid,
                        'isEnabled' => $this->isEnabled,
                        'schedulePolicy' => $this->schedulePolicy,
                ], static fn ($value) => $value !== null);
        }
}
