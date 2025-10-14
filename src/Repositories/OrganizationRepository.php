<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateOrganizationCustomWelcomeEmailTemplatePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateOrganizationNotificationOAuth2SignInPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateOrganizationNotificationSmtpTestPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateOrganizationNotificationTestEmailPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditOrganizationAutoDeploymentSettingsPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditOrganizationBrandingSettingsPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditOrganizationCustomWelcomeEmailTemplatePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditOrganizationNotificationSettingsPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditOrganizationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditOrganizationPolicySettingsPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePutRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class OrganizationRepository implements Repository {
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;
	use CreatePutRequest;

	public function getBaseRoute(): string {
		return 'organizations';
	}

	/**
	 * Get All Organizations Returns a collection resource representation of all organizations (service provider, resellers, companies).
	 * Path: /organizations
	 */
	public function getOrganizations(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Custom Settings of Email Notification Returns a collection resource representation of all custom settings configured for email notifications.
	 * Path: /organizations/configuration/notification/welcomeEmails
	 */
	public function getCustomWelcomeEmailTemplates(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/configuration/notification/welcomeEmails');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization Returns a resource representation of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}
	 */
	public function getOrganization(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Organization Modifies an organization with the specified UID.
	 * Path: /organizations/{organizationUid}
	 */
        public function patchOrganization(string $organizationUid, ?EditOrganizationPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organization Alarm Templates Returns a resource representation of all alarm templates configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/alarms
	 */
	public function getOrganizationAlarms(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/alarms', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Disable Organization Alarm Templates Disables all alarm templates configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/alarms/disable
	 */
	public function disableOrganizationAlarms(string $organizationUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/configuration/alarms/disable', $organizationUid ));
	}

	/**
	 * Enable Organization Alarm Templates Enables all alarm templates configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/alarms/enable
	 */
	public function enableOrganizationAlarms(string $organizationUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/configuration/alarms/enable', $organizationUid ));
	}

	/**
	 * Get Organization Automatic Deployment Settings Returns a resource representation of Veeam backup agent automatic deployment settings configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/autodeployment
	 */
	public function getOrganizationAutoDeploymentSettings(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/autodeployment', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Organization Automatic Deployment Settings Modifies Veeam backup agent automatic deployment settings configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/autodeployment
	 */
        public function patchOrganizationAutoDeploymentSettings(string $organizationUid, ?EditOrganizationAutoDeploymentSettingsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/configuration/autodeployment', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization Branding Settings Returns a resource representation of branding settings of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/branding
	 */
	public function getOrganizationBrandingSettings(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/branding', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Organization Branding Settings Modifies branding settings of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/branding
	 */
        public function patchOrganizationBrandingSettings(string $organizationUid, ?EditOrganizationBrandingSettingsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/configuration/branding', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization Portal URL Returns a resource representation of a portal URL configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/loginUrl
	 */
	public function getOrganizationLoginUrl(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/loginUrl', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Replace Organization Portal URL Replaces a portal configured for an organization with the specified UID. > Applies a portal URL to organizations that has no portal URL configured. > If the organization is a company and it has at least one configured IdP the operation will return an error with the 1000 code. > If the specified URL is already occupied by another organization the operation will return an error with the 10500 code.
	 * Path: /organizations/{organizationUid}/configuration/loginUrl
	 */
	public function replaceOrganizationLoginUrl(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/%s/configuration/loginUrl', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization Notification Settings Returns a resource representation of notification settings of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification
	 */
	public function getOrganizationNotificationSettings(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/notification', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Organization Notification Settings Modifies notification settings of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification
	 */
        public function patchOrganizationNotificationSettings(string $organizationUid, ?EditOrganizationNotificationSettingsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/configuration/notification', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Send SMTP Server OAuth 2.0 Authorization Request Sends an OAuth 2.0 authorization request to access an SMTP server for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification/oauth2/signin
	 */
        public function prepareSmtpOAuth2SignIn(string $organizationUid, ?CreateOrganizationNotificationOAuth2SignInPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/configuration/notification/oauth2/signin', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Obtain SMTP Server OAuth 2.0 Authorization Tokens Returns a pair of OAuth 2.0 authorization tokens to access an SMTP server for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification/oauth2/signin/completion
	 */
	public function completeSmtpOAuth2SignIn(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/notification/oauth2/signin/completion', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Test SMTP Server Settings Checks provided SMTP server settings. Returns updated and corrected settings and additional information on SMTP server.
	 * Path: /organizations/{organizationUid}/configuration/notification/smtp/test
	 */
        public function testNotificationSmtpSettings(string $organizationUid, ?CreateOrganizationNotificationSmtpTestPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/configuration/notification/smtp/test', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Test Email Notifications Sends test email message with the specified settings.
	 * Path: /organizations/{organizationUid}/configuration/notification/test
	 */
        public function sendTestNotificationEmail(string $organizationUid, ?CreateOrganizationNotificationTestEmailPayload $payload = null): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/configuration/notification/test', $organizationUid ), $payload);
	}

	/**
	 * Get Custom Settings of Organization Email Notifications Returns a resource representation of custom settings configured for email notifications of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification/welcomeEmail
	 */
	public function getCustomWelcomeEmailTemplate(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/notification/welcomeEmail', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Custom Settings of Organization Email Notifications Modifies custom settings configured for email notification of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification/welcomeEmail
	 */
        public function patchCustomWelcomeEmailTemplate(string $organizationUid, ?EditOrganizationCustomWelcomeEmailTemplatePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/configuration/notification/welcomeEmail', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Configure Custom Settings for Organization Email Notifications Configures custom settings for email notifications of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/notification/welcomeEmail
	 */
        public function createCustomWelcomeEmailTemplate(string $organizationUid, ?CreateOrganizationCustomWelcomeEmailTemplatePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/configuration/notification/welcomeEmail', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization Policy Settings Returns a resource representation of policy settings configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/policy
	 */
	public function getOrganizationPolicySettings(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/configuration/policy', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Organization Policy Settings Modifies policy settings configured for an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/policy
	 */
        public function patchOrganizationPolicySettings(string $organizationUid, ?EditOrganizationPolicySettingsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/configuration/policy', $organizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Refresh Organization Security Token Refreshes a security token issued to an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/configuration/refreshsecuritytoken
	 */
	public function refreshSecurityToken(string $organizationUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/configuration/refreshsecuritytoken', $organizationUid ));
	}
}
