<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateOrganizationNotificationSmtpTestPayload extends AbstractJsonPayload {
        private ?string $serverAddress = null;

        private ?string $timeout = null;

        private ?string $tlsMode = null;

        private ?string $exclusivelyAcceptedCertificateHash = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $passwordCredential = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $oAuth2Credential = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $serverCertificate = null;

        public function __construct(
                ?string $serverAddress = null,
                ?string $timeout = null,
                ?string $tlsMode = null,
                ?string $exclusivelyAcceptedCertificateHash = null,
                ?array $passwordCredential = null,
                ?array $oAuth2Credential = null,
                ?array $serverCertificate = null
        ) {
                parent::__construct();

                $this->serverAddress = $serverAddress;
                $this->timeout = $timeout;
                $this->tlsMode = $tlsMode;
                $this->exclusivelyAcceptedCertificateHash = $exclusivelyAcceptedCertificateHash;
                $this->passwordCredential = $passwordCredential;
                $this->oAuth2Credential = $oAuth2Credential;
                $this->serverCertificate = $serverCertificate;
        }

        public function setServerAddress(?string $serverAddress): self {
                $this->serverAddress = $serverAddress;

                return $this;
        }

        public function setTimeout(?string $timeout): self {
                $this->timeout = $timeout;

                return $this;
        }

        public function setTlsMode(?string $tlsMode): self {
                $this->tlsMode = $tlsMode;

                return $this;
        }

        public function setExclusivelyAcceptedCertificateHash(?string $exclusivelyAcceptedCertificateHash): self {
                $this->exclusivelyAcceptedCertificateHash = $exclusivelyAcceptedCertificateHash;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $passwordCredential
         */
        public function setPasswordCredential(?array $passwordCredential): self {
                $this->passwordCredential = $passwordCredential;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $oAuth2Credential
         */
        public function setOAuth2Credential(?array $oAuth2Credential): self {
                $this->oAuth2Credential = $oAuth2Credential;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $serverCertificate
         */
        public function setServerCertificate(?array $serverCertificate): self {
                $this->serverCertificate = $serverCertificate;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'serverAddress' => $this->serverAddress,
                        'timeout' => $this->timeout,
                        'tlsMode' => $this->tlsMode,
                        'exclusivelyAcceptedCertificateHash' => $this->exclusivelyAcceptedCertificateHash,
                        'passwordCredential' => $this->passwordCredential,
                        'oAuth2Credential' => $this->oAuth2Credential,
                        'serverCertificate' => $this->serverCertificate,
                ], static fn ($value) => $value !== null);
        }
}
