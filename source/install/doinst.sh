#!/bin/sh
BOOT="/boot/config/plugins/mergerfsp"
DOCROOT="/usr/local/emhttp/plugins/mergerfsp"

# Update file permissions of scripts
chmod +0755 $DOCROOT/event/*
chmod +0755 $DOCROOT/mergerfs/*

if [ ! -d $BOOT/scripts ]; then
    mkdir $BOOT/scripts
fi

cp -nr $DOCROOT/mergerfs/* $BOOT/scripts >/dev/null 2>&1
chmod +0755 $BOOT/scripts/*