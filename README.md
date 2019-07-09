Simple mysqli functions

Install

require 'path/mysqli.php';

Example

#fetch

$sql = query('SELECT * FROM `test` ORDER BY `id` DESC LIMIT 20');

while($row = fetch($sql))
{

echo '<b>id '.$row['id'].' : text '.$row['text'].'</b>';

}

#object

$sql = query('SELECT * FROM `test` ORDER BY `id` DESC LIMIT 20');

while($row = obj($sql))
{

echo '<b>id '.$row->id.' : text '.$row->text.'</b>';

}
