<?
/* Copyright Derek Macias (parts of code from NUT package)
 * Copyright macester (parts of code from NUT package)
 * Copyright gfjardim (parts of code from NUT package)
 * Copyright SimonF (parts of code from NUT package)
 * Copyright Dan Landon (parts of code from Web GUI)
 * Copyright Bergware International (parts of code from Web GUI)
 * Copyright Lime Technology (any and all other parts of Unraid)
 *
 * Copyright desertwitch (as author and maintainer of this file)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 */
$mergerfsp_cfg  = parse_ini_file("/boot/config/plugins/mergerfsp/mergerfsp.cfg");

$mergerfsp_dashboards = trim(isset($mergerfsp_cfg['DASHBOARDS']) ? htmlspecialchars($mergerfsp_cfg['DASHBOARDS']) : 'disable');
$mergerfsp_timer_mounts = trim(isset($mergerfsp_cfg['TIMERMOUNTS']) ? htmlspecialchars($mergerfsp_cfg['TIMERMOUNTS']) : '20');
$mergerfsp_timer_start = trim(isset($mergerfsp_cfg['TIMERSTART']) ? htmlspecialchars($mergerfsp_cfg['TIMERSTART']) : '20');
$mergerfsp_timer_stop = trim(isset($mergerfsp_cfg['TIMERSTOP']) ? htmlspecialchars($mergerfsp_cfg['TIMERSTOP']) : '20');

$mergerfs_backend = htmlspecialchars(trim(shell_exec("find /var/log/packages/ -type f -iname 'mergerfs-*' -printf '%f\n' 2> /dev/null")));
$mergerfst_backend = htmlspecialchars(trim(shell_exec("find /var/log/packages/ -type f -iname 'mergerfstools-*' -printf '%f\n' 2> /dev/null")));

?>
