<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateBackupServerUpgradePayload extends AbstractJsonPayload {
	private ?array $distribution;

	private ?bool $usePredownloadedIso;

	private ?string $answerXml;

	private ?bool $allowAutoReboot;

	private ?bool $stopAllActivities;

	private ?bool $useManagementAgentCredentials;

	private ?array $adminCredentials;

	public function __construct(
		?array $distribution = null,
		?bool $usePredownloadedIso = null,
		?string $answerXml = null,
		?bool $allowAutoReboot = null,
		?bool $stopAllActivities = null,
		?bool $useManagementAgentCredentials = null,
		?array $adminCredentials = null
	) {
		parent::__construct();

		$this->distribution = $distribution;
		$this->usePredownloadedIso = $usePredownloadedIso;
		$this->answerXml = $answerXml;
		$this->allowAutoReboot = $allowAutoReboot;
		$this->stopAllActivities = $stopAllActivities;
		$this->useManagementAgentCredentials = $useManagementAgentCredentials;
		$this->adminCredentials = $adminCredentials;
	}

	public function setDistribution(?array $distribution): self {
		$this->distribution = $distribution;

		return $this;
	}

	public function useDistributionSource(string $filePath, string $userName, string $password): self {
		return $this->setDistribution([
			'filePath' => $filePath,
			'userName' => $userName,
			'password' => $password,
		]);
	}

	public function setUsePredownloadedIso(?bool $usePredownloadedIso): self {
		$this->usePredownloadedIso = $usePredownloadedIso;

		return $this;
	}

	public function setAnswerXml(?string $answerXml): self {
		$this->answerXml = $answerXml;

		return $this;
	}

	public function setAllowAutoReboot(?bool $allowAutoReboot): self {
		$this->allowAutoReboot = $allowAutoReboot;

		return $this;
	}

	public function setStopAllActivities(?bool $stopAllActivities): self {
		$this->stopAllActivities = $stopAllActivities;

		return $this;
	}

	public function setUseManagementAgentCredentials(?bool $useManagementAgentCredentials): self {
		$this->useManagementAgentCredentials = $useManagementAgentCredentials;

		return $this;
	}

	public function setAdminCredentials(?array $adminCredentials): self {
		$this->adminCredentials = $adminCredentials;

		return $this;
	}

	public function useAdminCredentials(string $username, string $password): self {
		return $this->setAdminCredentials([
			'username' => $username,
			'password' => $password,
		]);
	}

	public function jsonSerialize(): array {
		return array_filter([
			'distribution' => $this->distribution,
			'usePredownloadedIso' => $this->usePredownloadedIso,
			'answerXml' => $this->answerXml,
			'allowAutoReboot' => $this->allowAutoReboot,
			'stopAllActivities' => $this->stopAllActivities,
			'useManagementAgentCredentials' => $this->useManagementAgentCredentials,
			'adminCredentials' => $this->adminCredentials,
		], static fn ($value) => $value !== null);
	}
}
