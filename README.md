Simple mysqli functions

Install

require 'path/mysqli.php';

Example

#fetch

$sql = query('SELECT * FROM `test` ORDER BY `id` DESC LIMIT 10');

while($row = fetch($sql))
{

echo '<div>id '.$row['id'].' : text '.$row['text'].'</div>';

}

#object

$sql = query('SELECT * FROM `test` ORDER BY `id` DESC LIMIT 10');

while($row = obj($sql))
{

echo '<div>id '.$row->id.' : text '.$row->text.'</div>';

}
