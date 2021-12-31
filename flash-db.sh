#!/bin/bash

 # https://stackoverflow.com/questions/19331497/set-environment-variables-from-file-of-key-value-pairs
export $(grep -v '^#' .env | xargs)

echo "Provide the filename (with path) to the MySql dump you want to replace with."

read dumpname

mysql --host=$DB_HOST --port=$DB_PORT -u $DB_USERNAME -p$DB_PASSWORD $DB_DATABASE < $dumpname
