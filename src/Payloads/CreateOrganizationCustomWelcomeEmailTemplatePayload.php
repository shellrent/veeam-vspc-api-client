<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateOrganizationCustomWelcomeEmailTemplatePayload extends AbstractJsonPayload {
        private ?string $emailContent = null;

        private ?bool $isDefault = null;

        private ?bool $showSelfServiceSection = null;

        public function __construct(
                ?string $emailContent = null,
                ?bool $isDefault = null,
                ?bool $showSelfServiceSection = null
        ) {
                parent::__construct();

                $this->emailContent = $emailContent;
                $this->isDefault = $isDefault;
                $this->showSelfServiceSection = $showSelfServiceSection;
        }

        public function setEmailContent(?string $emailContent): self {
                $this->emailContent = $emailContent;

                return $this;
        }

        public function setIsDefault(?bool $isDefault): self {
                $this->isDefault = $isDefault;

                return $this;
        }

        public function setShowSelfServiceSection(?bool $showSelfServiceSection): self {
                $this->showSelfServiceSection = $showSelfServiceSection;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'emailContent' => $this->emailContent,
                        'isDefault' => $this->isDefault,
                        'showSelfServiceSection' => $this->showSelfServiceSection,
                ], static fn ($value) => $value !== null);
        }
}
