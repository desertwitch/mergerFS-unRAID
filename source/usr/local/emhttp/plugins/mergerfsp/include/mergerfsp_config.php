<?

$mergerfsp_cfg  = parse_ini_file("/boot/config/plugins/mergerfsp/mergerfsp.cfg");

$mergerfsp_timer_mounts = trim(isset($mergerfsp_cfg['TIMERMOUNTS']) ? htmlspecialchars($mergerfsp_cfg['TIMERMOUNTS']) : '20');
$mergerfsp_timer_start = trim(isset($mergerfsp_cfg['TIMERSTART']) ? htmlspecialchars($mergerfsp_cfg['TIMERSTART']) : '20');
$mergerfsp_timer_stop = trim(isset($mergerfsp_cfg['TIMERSTOP']) ? htmlspecialchars($mergerfsp_cfg['TIMERSTOP']) : '20');

$mergerfs_backend = trim(htmlspecialchars(shell_exec("find /var/log/packages/ -type f -iname 'mergerfs-*' -printf '%f\n' 2> /dev/null")));
$mergerfst_backend = trim(htmlspecialchars(shell_exec("find /var/log/packages/ -type f -iname 'mergerfstools-*' -printf '%f\n' 2> /dev/null")));

?>
