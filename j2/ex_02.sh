#!/bin/bash

if [ -z "$1" ]; then
    wc -l
fi

if [ -n "$1" ]; then
    grep -i -w $1 | wc -l
fi

