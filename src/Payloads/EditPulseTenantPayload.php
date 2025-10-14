<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class EditPulseTenantPayload extends JsonPatchPayload {
        public function replaceMappedMasterOrganizationUid(?string $organizationUid): self {
                return $this->addOperation('replace', '/mappedMasterOrganizationUid', $organizationUid);
        }

        public function clearMappedMasterOrganization(): self {
                return $this->addOperation('remove', '/mappedMasterOrganizationUid');
        }
}
