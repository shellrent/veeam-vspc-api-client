<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

abstract class AbstractLicenseUploadPayload extends AbstractMultipartFormDataPayload {
        private ?string $licenseContents = null;
        private ?string $licenseFilename = null;
        private ?string $licenseContentType = null;

        /**
         * @param string $licenseContents Binary contents of the license file.
         * @param string|null $filename Optional filename advertised in the multipart part.
         * @param string|null $contentType Optional content type advertised in the multipart part.
         */
        public function withLicense(string $licenseContents, ?string $filename = null, ?string $contentType = null): self {
                $this->licenseContents = $licenseContents;
                $this->licenseFilename = $filename;
                $this->licenseContentType = $contentType;

                return $this;
        }

        protected function formFields(): array {
                if ($this->licenseContents === null) {
                        return [];
                }

                $field = ['contents' => $this->licenseContents];

                if ($this->licenseFilename !== null) {
                        $field['filename'] = $this->licenseFilename;
                }

                if ($this->licenseContentType !== null) {
                        $field['contentType'] = $this->licenseContentType;
                }

                return ['license' => $field];
        }
}
