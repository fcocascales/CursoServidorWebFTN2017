#!/bin/bash
set -x #echo on

# Initialize

xgettext --from-code=UTF-8 -o messages.pot ../*.php 
#echo "messages.pot"