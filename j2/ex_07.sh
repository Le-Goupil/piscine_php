#!/bin/bash

if [ -z "$1" ]; then
        commit="null"
        echo $commit
fi
if [ -n "$1" ]; then
        commit="$1"
        echo $commit
fi


git add *
git commit -m "$commit"
git push

