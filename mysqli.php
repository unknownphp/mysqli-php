<?php

#options
$option = array(
'dbserver' => '127.0.0.1', #db server
'dbname' => '', #db name
'dbkey' => '', #db password
'dbuser' => '' #db user
);

$db = new mysqli($option['dbserver'], $option['dbname'], $option['dbkey'], $option['dbuser']);

$db->query('SET NAMES "UTF8"');

if(!$db)
{
echo 'No connection';
}

#mysqli query
function query($sql)
{
global $db;

return $db->query($sql);
}

#mysqli fetch
function fetch($sql)
{
global $db;

return $db->fetch_assoc($sql);
}

#mysqli.object
function obj($sql)
{
global $db;

return $db->fetch_object($sql);
}

#mysqli num
function num($sqli)
{
global $db;

return $db->num_rows($sql);
}
