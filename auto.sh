#!/bin/bash
# this script gets run every 5 minutes server-side

# pull the repository for changes
git pull

# pull ark-docs too
(cd ark-docs; git pull)
