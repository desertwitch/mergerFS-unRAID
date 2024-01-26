#!/bin/bash
BOOT="/boot/config/plugins/mergerfsp"
DOCROOT="/usr/local/emhttp/plugins/mergerfsp"

# Update file permissions of scripts
chmod +0755 $DOCROOT/event/*
chmod +0755 $DOCROOT/mergerfs/*

if [ ! -d /etc/mergerfsp ]; then
    mkdir /etc/mergerfsp
fi

if [ ! -d $BOOT/scripts ]; then
    mkdir $BOOT/scripts
fi

cp -nr $DOCROOT/mergerfs/* $BOOT/scripts >/dev/null 2>&1
cp -rf $BOOT/scripts/* /etc/mergerfsp >/dev/null 2>&1

chmod 755 /etc/mergerfsp
chown root:root /etc/mergerfsp
chmod 755 /etc/mergerfsp/*
chown root:root /etc/mergerfsp/*
