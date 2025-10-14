<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

use DateTimeInterface;

class EditPulseLicensePayload extends JsonPatchPayload {
        public function replaceAssignedCompanyUid(?string $companyUid): self {
                return $this->addOperation('replace', '/assignedCompanyUid', $companyUid);
        }

        public function removeAssignedCompany(): self {
                return $this->addOperation('remove', '/assignedCompanyUid');
        }

        public function replaceExpirationDate(DateTimeInterface $expirationDate): self {
                return $this->addOperation('replace', '/expirationDate', $expirationDate->format(DateTimeInterface::ATOM));
        }

        public function clearExpirationDate(): self {
                return $this->addOperation('remove', '/expirationDate');
        }

        public function replaceWorkloadCount(int $index, int $count): self {
                return $this->addOperation('replace', sprintf('/workloads/%d/count', $index), $count);
        }
}
