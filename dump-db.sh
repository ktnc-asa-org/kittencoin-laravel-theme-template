#!/bin/bash

 # https://stackoverflow.com/questions/19331497/set-environment-variables-from-file-of-key-value-pairs
export $(grep -v '^#' .env | xargs)

mysqldump --host=$DB_HOST --port=$DB_PORT -u $DB_USERNAME -p$DB_PASSWORD $DB_DATABASE | gzip -c > database/backup/$(date +%Y%m%d-%H%M%S)-${DB_DATABASE}_${APP_ENV}.sql.gz
