<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class ReplaceWindowsBackupAgentSettingsPayload extends AbstractJsonPayload {
        private ?bool $disableScheduledBackups = null;

        private ?bool $disableControlPanelNotification = null;

        private ?bool $disableBackupOverMeteredConnection = null;

        private ?bool $disableScheduleWakeup = null;

        private ?bool $throttleBackupActivity = null;

        private ?bool $restrictVpnConnections = null;

        private ?bool $limitBandwidthConsumption = null;

        private ?int $bandwidthSpeedLimit = null;

        private ?string $bandwidthSpeedLimitUnit = null;

        private ?bool $flrWithoutAdminPrivilegesAllowed = null;

        public function setDisableScheduledBackups(bool $disableScheduledBackups): static {
                $this->disableScheduledBackups = $disableScheduledBackups;

                return $this;
        }

        public function setDisableControlPanelNotification(bool $disableControlPanelNotification): static {
                $this->disableControlPanelNotification = $disableControlPanelNotification;

                return $this;
        }

        public function setDisableBackupOverMeteredConnection(bool $disableBackupOverMeteredConnection): static {
                $this->disableBackupOverMeteredConnection = $disableBackupOverMeteredConnection;

                return $this;
        }

        public function setDisableScheduleWakeup(bool $disableScheduleWakeup): static {
                $this->disableScheduleWakeup = $disableScheduleWakeup;

                return $this;
        }

        public function setThrottleBackupActivity(bool $throttleBackupActivity): static {
                $this->throttleBackupActivity = $throttleBackupActivity;

                return $this;
        }

        public function setRestrictVpnConnections(bool $restrictVpnConnections): static {
                $this->restrictVpnConnections = $restrictVpnConnections;

                return $this;
        }

        public function setLimitBandwidthConsumption(bool $limitBandwidthConsumption): static {
                $this->limitBandwidthConsumption = $limitBandwidthConsumption;

                return $this;
        }

        public function setBandwidthSpeedLimit(?int $bandwidthSpeedLimit): static {
                $this->bandwidthSpeedLimit = $bandwidthSpeedLimit;

                return $this;
        }

        /**
         * @param string|null $bandwidthSpeedLimitUnit Accepted values: MbitPerSec, KbytePerSec, MbytePerSec
         */
        public function setBandwidthSpeedLimitUnit(?string $bandwidthSpeedLimitUnit): static {
                $this->bandwidthSpeedLimitUnit = $bandwidthSpeedLimitUnit;

                return $this;
        }

        public function setFlrWithoutAdminPrivilegesAllowed(bool $flrWithoutAdminPrivilegesAllowed): static {
                $this->flrWithoutAdminPrivilegesAllowed = $flrWithoutAdminPrivilegesAllowed;

                return $this;
        }

        public function jsonSerialize(): array {
                return array_filter([
                        'disableScheduledBackups' => $this->disableScheduledBackups,
                        'disableControlPanelNotification' => $this->disableControlPanelNotification,
                        'disableBackupOverMeteredConnection' => $this->disableBackupOverMeteredConnection,
                        'disableScheduleWakeup' => $this->disableScheduleWakeup,
                        'throttleBackupActivity' => $this->throttleBackupActivity,
                        'restrictVpnConnections' => $this->restrictVpnConnections,
                        'limitBandwidthConsumption' => $this->limitBandwidthConsumption,
                        'bandwidthSpeedLimit' => $this->bandwidthSpeedLimit,
                        'bandwidthSpeedLimitUnit' => $this->bandwidthSpeedLimitUnit,
                        'flrWithoutAdminPrivilegesAllowed' => $this->flrWithoutAdminPrivilegesAllowed,
                ], static fn (mixed $value): bool => $value !== null);
        }
}
