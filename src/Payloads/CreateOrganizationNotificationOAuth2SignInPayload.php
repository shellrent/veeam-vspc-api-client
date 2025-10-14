<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateOrganizationNotificationOAuth2SignInPayload extends AbstractJsonPayload {
        /**
         * @var array<string, mixed>|null
         */
        private ?array $clientSettings = null;

        private ?string $redirectUrl = null;

        private ?string $state = null;

        public function __construct(
                ?array $clientSettings = null,
                ?string $redirectUrl = null,
                ?string $state = null
        ) {
                parent::__construct();

                $this->clientSettings = $clientSettings;
                $this->redirectUrl = $redirectUrl;
                $this->state = $state;
        }

        /**
         * @param array<string, mixed>|null $clientSettings
         */
        public function setClientSettings(?array $clientSettings): self {
                $this->clientSettings = $clientSettings;

                return $this;
        }

        public function setRedirectUrl(?string $redirectUrl): self {
                $this->redirectUrl = $redirectUrl;

                return $this;
        }

        public function setState(?string $state): self {
                $this->state = $state;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'clientSettings' => $this->clientSettings,
                        'redirectUrl' => $this->redirectUrl,
                        'state' => $this->state,
                ], static fn ($value) => $value !== null);
        }
}
