<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupAgentJobRepository implements Repository {
	public function getBaseRoute(): string {
		return '';
	}
}
