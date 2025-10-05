# Raspberry Pi Asterisk for GoIP + VoIP.ms

## Overview
This project bootstraps a Raspberry Pi that runs Asterisk with `chan_sip` for integrating a GoIP GSM gateway and VoIP.ms SIP trunks. The repository provides hardened defaults, provisioning scripts, and testing guidance so you can accept PSTN calls from the GoIP and route them through VoIP.ms (and vice versa).

## Repository Layout
- `scripts/install_asterisk_pi.sh` installs system packages, builds/installs Asterisk, enables services, and configures log rotation.
- `asterisk/sip.conf` defines `chan_sip` peers for GoIP and VoIP.ms along with shared templates.
- `asterisk/extensions.conf` wires inbound/outbound call routing and includes simple IVR examples.
- `asterisk/pjsip.conf` remains commented as a placeholder should you migrate away from `chan_sip`.
- `asterisk/rtp.conf` restricts the RTP port range to match firewall openings.
- `firewall/pi-ufw.sh` applies an opinionated UFW ruleset for SIP/RTP and SSH.
- `tests/call-plan.md` documents manual call scenarios to validate both trunks.

## Quick Start
1. Flash Raspberry Pi OS Lite onto a microSD, boot the Pi, and ensure it has internet access.
2. Copy this repository to the Pi (e.g., `git clone` or `scp`).
3. Run `sudo bash scripts/install_asterisk_pi.sh` to install prerequisites and deploy configs.
4. Update the secrets in `asterisk/sip.conf` for your GoIP device and VoIP.ms credentials.
5. Reload Asterisk with `sudo systemctl restart asterisk` and monitor using `sudo asterisk -rvvv`.

## Configuration Checklist
- Confirm the GoIP is configured to register to the Pi using the `chan_sip` username/password.
- In your VoIP.ms portal, create a sub-account or main account registration that matches the peer defined here.
- Adapt the dialplan in `asterisk/extensions.conf` to fit your DID, extension numbering, and failover strategy.
- Adjust codecs, RTP ports, or NAT settings to match your environment.

## Testing
Follow the manual call flow steps in `tests/call-plan.md`. Validate:
- GoIP → Asterisk → VoIP.ms outbound calling
- VoIP.ms DID → Asterisk → GoIP inbound routing
- Local loopback tests (`*43` echo, voicemail drop, etc.)

## Supporting Resources
- [Asterisk wiki: chan_sip](https://wiki.asterisk.org/wiki/display/AST/chan_sip)
- [VoIP.ms support: Asterisk configuration](https://wiki.voip.ms/article/Asterisk)
- [GoIP 4/8 GSM Gateway Manual](https://www.dbltek.com)
