# Readme

## Installation instructions

1. Run `docker compose up` and wait until app is ready.
2. Run curl command to get response times: `docker compose exec app curl -w "@curl-format.txt" -o /dev/null -s "http://localhost:8080"`

_Please note:_ first request takes a bit longer due to assets being processed.