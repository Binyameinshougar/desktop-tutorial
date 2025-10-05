#!/usr/bin/env bash
set -euo pipefail

if [[ $EUID -ne 0 ]]; then
  echo "[ERROR] Run this firewall script as root (use sudo)." >&2
  exit 1
fi

log() {
  printf '[%s] %s\n' "$(date '+%Y-%m-%d %H:%M:%S')" "$*"
}

log "Configuring UFW for Raspberry Pi Asterisk"

ufw --force enable
ufw --force default deny incoming
ufw --force default allow outgoing

log "Allowing SSH (22/tcp)"
ufw --force allow 22/tcp

log "Allowing SIP signalling (5060/udp)"
ufw --force allow 5060/udp

log "Allowing RTP media (10000-20000/udp)"
ufw --force allow 10000:20000/udp

log "Firewall rules applied"
