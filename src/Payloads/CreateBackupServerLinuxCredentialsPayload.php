<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerLinuxCredentialsPayload extends AbstractJsonPayload {
	private ?string $username;

	private ?string $password;

	private ?string $description;

	private ?string $mappedOrganizationUid;

	private ?int $sshPort;

	private ?bool $autoElevated;

	private ?bool $addToSudoers;

	private ?bool $useSu;

	private ?string $privateKey;

	private ?string $passphrase;

	private ?string $rootPassword;

	public function __construct(?string $username = null) {
		parent::__construct();

		$this->username = $username;
		$this->password = null;
		$this->description = null;
		$this->mappedOrganizationUid = null;
		$this->sshPort = 22;
		$this->autoElevated = false;
		$this->addToSudoers = false;
		$this->useSu = false;
		$this->privateKey = null;
		$this->passphrase = null;
		$this->rootPassword = null;
	}

	public function setUsername(?string $username): self {
		$this->username = $username;

		return $this;
	}

	public function setPassword(?string $password): self {
		$this->password = $password;

		return $this;
	}

	public function setDescription(?string $description): self {
		$this->description = $description;

		return $this;
	}

	public function setMappedOrganizationUid(?string $mappedOrganizationUid): self {
		$this->mappedOrganizationUid = $mappedOrganizationUid;

		return $this;
	}

	public function setSshPort(?int $sshPort): self {
		$this->sshPort = $sshPort;

		return $this;
	}

	public function setAutoElevated(?bool $autoElevated): self {
		$this->autoElevated = $autoElevated;

		return $this;
	}

	public function setAddToSudoers(?bool $addToSudoers): self {
		$this->addToSudoers = $addToSudoers;

		return $this;
	}

	public function setUseSu(?bool $useSu): self {
		$this->useSu = $useSu;

		return $this;
	}

	public function setPrivateKey(?string $privateKey): self {
		$this->privateKey = $privateKey;

		return $this;
	}

	public function setPassphrase(?string $passphrase): self {
		$this->passphrase = $passphrase;

		return $this;
	}

	public function setRootPassword(?string $rootPassword): self {
		$this->rootPassword = $rootPassword;

		return $this;
	}

	public function jsonSerialize(): array {
		return array_filter([
			'username' => $this->username,
			'password' => $this->password,
			'description' => $this->description,
			'mappedOrganizationUid' => $this->mappedOrganizationUid,
			'sshPort' => $this->sshPort,
			'autoElevated' => $this->autoElevated,
			'addToSudoers' => $this->addToSudoers,
			'useSu' => $this->useSu,
			'privateKey' => $this->privateKey,
			'passphrase' => $this->passphrase,
			'rootPassword' => $this->rootPassword,
		], static fn ($value) => $value !== null);
	}
}
