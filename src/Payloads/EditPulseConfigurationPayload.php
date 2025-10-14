<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class EditPulseConfigurationPayload extends JsonPatchPayload {
        public function replaceToken(?string $token): self {
                return $this->addOperation('replace', '/token', $token);
        }

        public function clearToken(): self {
                return $this->addOperation('remove', '/token');
        }

        public function setCompanyMappingEnabled(bool $enabled): self {
                return $this->addOperation('replace', '/isCompanyMappingEnabled', $enabled);
        }

        public function setLicenseManagementEnabled(bool $enabled): self {
                return $this->addOperation('replace', '/isLicenseManagementEnabled', $enabled);
        }

        public function setPushingNewCompaniesEnabled(bool $enabled): self {
                return $this->addOperation('replace', '/isPushingNewCompaniesToPulseEnabled', $enabled);
        }
}
