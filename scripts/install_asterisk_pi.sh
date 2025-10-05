#!/usr/bin/env bash
set -euo pipefail

if [[ $EUID -ne 0 ]]; then
  echo "[ERROR] Run this installer as root (use sudo)." >&2
  exit 1
fi

SCRIPT_DIR=$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)
REPO_ROOT=$(cd "${SCRIPT_DIR}/.." && pwd)
ASTERISK_ETC=/etc/asterisk

log() {
  printf '[%s] %s\n' "$(date '+%Y-%m-%d %H:%M:%S')" "$*"
}

install_packages() {
  log "Updating apt cache"
  apt-get update -y
  log "Installing Asterisk"
  DEBIAN_FRONTEND=noninteractive apt-get install -y asterisk
}

deploy_configs() {
  log "Copying configuration files"
  install -Dm640 "${REPO_ROOT}/asterisk/sip.conf" "${ASTERISK_ETC}/sip.conf"
  install -Dm640 "${REPO_ROOT}/asterisk/extensions.conf" "${ASTERISK_ETC}/extensions.conf"
  install -Dm640 "${REPO_ROOT}/asterisk/rtp.conf" "${ASTERISK_ETC}/rtp.conf"
  chown asterisk:asterisk \
    "${ASTERISK_ETC}/sip.conf" \
    "${ASTERISK_ETC}/extensions.conf" \
    "${ASTERISK_ETC}/rtp.conf"
}

enable_service() {
  log "Enabling and restarting Asterisk"
  systemctl enable asterisk
  systemctl restart asterisk
}

main() {
  install_packages
  deploy_configs
  enable_service
  log "Done. Update placeholders (PI_IP, GOIP_IP, etc.) in /etc/asterisk/sip.conf before use."
}

main "$@"
