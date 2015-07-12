#!/bin/bash
# this script gets run every 5 minutes server-side

# pull the repository for changes
git pull

# pull ark-docs too
if [ ! -d "ark-docs" ]; then
    git clone http://www.github.com/ark-lang/ark-docs ark-docs
fi
(cd ark-docs; git pull)
