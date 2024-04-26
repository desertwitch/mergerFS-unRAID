<?
$base = '/etc/mergerfsp/';
$file = realpath($_GET['editfile']);
$editfile = 'Invalid File';

if(file_exists($file))
    $editfile = file_get_contents($file);
echo json_encode($editfile);
?>
