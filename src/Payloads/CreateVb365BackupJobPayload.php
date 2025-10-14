<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateVb365BackupJobPayload extends AbstractJsonPayload {
        private string $name;

        private string $repositoryUid;

        private ?string $description = null;

        private ?bool $isEnabled = null;

        private ?string $backupType = null;

        /**
         * @var array<int, array<string, mixed>>|null
         */
        private ?array $selectedItems = null;

        /**
         * @var array<int, array<string, mixed>>|null
         */
        private ?array $excludedItems = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $schedulePolicy = null;

        public function __construct(string $name, string $repositoryUid) {
                parent::__construct();

                $this->name = $name;
                $this->repositoryUid = $repositoryUid;
        }

        public function setDescription(?string $description): self {
                $this->description = $description;

                return $this;
        }

        public function setIsEnabled(?bool $isEnabled): self {
                $this->isEnabled = $isEnabled;

                return $this;
        }

        public function setBackupType(?string $backupType): self {
                $this->backupType = $backupType;

                return $this;
        }

        /**
         * @param array<int, array<string, mixed>>|null $selectedItems
         */
        public function setSelectedItems(?array $selectedItems): self {
                $this->selectedItems = $selectedItems;

                return $this;
        }

        /**
         * @param array<int, array<string, mixed>>|null $excludedItems
         */
        public function setExcludedItems(?array $excludedItems): self {
                $this->excludedItems = $excludedItems;

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
                        'name' => $this->name,
                        'description' => $this->description,
                        'repositoryUid' => $this->repositoryUid,
                        'isEnabled' => $this->isEnabled,
                        'backupType' => $this->backupType,
                        'selectedItems' => $this->selectedItems,
                        'excludedItems' => $this->excludedItems,
                        'schedulePolicy' => $this->schedulePolicy,
                ], static fn ($value) => $value !== null);
        }
}
