<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateVb365Microsoft365OrganizationPayload extends AbstractJsonPayload {
        private ?bool $isTeamsOnline = null;

        private ?bool $isTeamsChatsOnline = null;

        /**
         * @var array<string, mixed>|null
         */
        private ?array $exchangeAndSharePointOnlineConnectionSettings = null;

        private ?string $region = null;

        public function __construct(
                ?bool $isTeamsOnline = null,
                ?bool $isTeamsChatsOnline = null,
                ?array $exchangeAndSharePointOnlineConnectionSettings = null,
                ?string $region = null
        ) {
                parent::__construct();

                $this->isTeamsOnline = $isTeamsOnline;
                $this->isTeamsChatsOnline = $isTeamsChatsOnline;
                $this->exchangeAndSharePointOnlineConnectionSettings = $exchangeAndSharePointOnlineConnectionSettings;
                $this->region = $region;
        }

        public function setIsTeamsOnline(?bool $isTeamsOnline): self {
                $this->isTeamsOnline = $isTeamsOnline;

                return $this;
        }

        public function setIsTeamsChatsOnline(?bool $isTeamsChatsOnline): self {
                $this->isTeamsChatsOnline = $isTeamsChatsOnline;

                return $this;
        }

        /**
         * @param array<string, mixed>|null $settings
         */
        public function setExchangeAndSharePointOnlineConnectionSettings(?array $settings): self {
                $this->exchangeAndSharePointOnlineConnectionSettings = $settings;

                return $this;
        }

        public function setRegion(?string $region): self {
                $this->region = $region;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'isTeamsOnline' => $this->isTeamsOnline,
                        'isTeamsChatsOnline' => $this->isTeamsChatsOnline,
                        'exchangeAndSharePointOnlineConnectionSettings' => $this->exchangeAndSharePointOnlineConnectionSettings,
                        'region' => $this->region,
                ], static fn ($value) => $value !== null);
        }
}
