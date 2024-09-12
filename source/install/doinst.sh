#!/bin/bash
#
# Copyright Derek Macias (parts of code from NUT package)
# Copyright macester (parts of code from NUT package)
# Copyright gfjardim (parts of code from NUT package)
# Copyright SimonF (parts of code from NUT package)
# Copyright Lime Technology (any and all other parts of Unraid)
#
# Copyright desertwitch (as author and maintainer of this file)
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License 2
# as published by the Free Software Foundation.
#
# The above copyright notice and this permission notice shall be
# included in all copies or substantial portions of the Software.
#
BOOT="/boot/config/plugins/mergerfsp"
DOCROOT="/usr/local/emhttp/plugins/mergerfsp"

# Update file permissions of scripts
chmod 755 $DOCROOT/event/*
chmod 755 $DOCROOT/scripts/*
chmod 755 $DOCROOT/mergerfs/*

if [ ! -d /etc/mergerfsp ]; then
    mkdir /etc/mergerfsp
fi

if [ ! -d $BOOT/scripts ]; then
    mkdir $BOOT/scripts
fi

cp -n $DOCROOT/default.cfg $BOOT/mergerfsp.cfg

cp -nr $DOCROOT/mergerfs/* $BOOT/scripts/ >/dev/null 2>&1
cp -rf $BOOT/scripts/* /etc/mergerfsp/ >/dev/null 2>&1

# set up plugin-specific polling tasks
rm -f /etc/cron.daily/mergerfs-poller >/dev/null 2>&1
ln -sf /usr/local/emhttp/plugins/mergerfsp/scripts/poller /etc/cron.daily/mergerfs-poller >/dev/null 2>&1
chmod +x /etc/cron.daily/mergerfs-poller >/dev/null 2>&1
/etc/cron.daily/mergerfs-poller conntest >/dev/null 2>&1 &

chmod 755 /etc/mergerfsp
chown root:root /etc/mergerfsp
chmod 755 /etc/mergerfsp/*
chown root:root /etc/mergerfsp/*
