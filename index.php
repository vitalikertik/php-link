<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//$users = array(); 
$users = ['Vasya', 'Bob', 'Jhon'];
echo 'Total users:' . count($users) . '<br>';
echo 'First user:' . $users[0] . '<br>';

foreach($users as $user){
    echo $user . '<br>';
}

$countries = [
'Germany' => 'Berlin',
'France' => 'Paris',
'Spain' => 'Madrid'
];

echo $countries['Spain'] . '<br>';

foreach ($countries as $country => $capital) {
    echo "<p>$country - $capital</p>";
    # code...
}
?>

<table border='1'>
    <tbody>
        <?php foreach ($countries as $country => $capital): ?>
        <tr>
        <td><?=$country ?> </td>
        <td><?= $capital ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html