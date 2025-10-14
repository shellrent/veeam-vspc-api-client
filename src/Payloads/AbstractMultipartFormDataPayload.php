<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

abstract class AbstractMultipartFormDataPayload extends GenericPayload {
	private string $boundary;

	public function __construct(?string $boundary = null) {
		$this->boundary = $boundary ?? $this->generateBoundary();

		parent::__construct('multipart/form-data; boundary=' . $this->boundary);
	}

        final protected function serializeBody(): string {
                $lines = [];

                foreach ($this->formFields() as $name => $value) {
                        if ($value === null) {
                                continue;
                        }

                        $lines[] = '--' . $this->boundary;

                        $disposition = 'Content-Disposition: form-data; name="' . $name . '"';

                        if (is_array($value)) {
                                $contents = $value['contents'] ?? null;

                                if ($contents === null) {
                                        continue;
                                }

                                if (isset($value['filename'])) {
                                        $disposition .= '; filename="' . $value['filename'] . '"';
                                }

                                $lines[] = $disposition;

                                if (isset($value['contentType'])) {
                                        $lines[] = 'Content-Type: ' . $value['contentType'];
                                }

                                $lines[] = '';
                                $lines[] = (string) $contents;

                                continue;
                        }

                        $lines[] = $disposition;
                        $lines[] = '';
                        $lines[] = (string) $value;
                }

                $lines[] = '--' . $this->boundary . '--';
                $lines[] = '';

                return implode("\r\n", $lines);
        }

	abstract protected function formFields(): array;

	public function getBoundary(): string {
		return $this->boundary;
	}

	private function generateBoundary(): string {
		return '----shellrent-sdk-' . bin2hex(random_bytes(8));
	}
}
