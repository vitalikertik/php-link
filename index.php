<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    //$users = array(); 
    $users = ['Vasya', 'Bob', 'Jhon'];
    echo 'Total users:' . count($users) . '<br>';
    echo 'First user:' . $users[0] . '<br>';

    foreach ($users as $user) {
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
            <?php foreach ($countries as $country => $capital) : ?>
                <tr>
                    <td><?= $country ?> </td>
                    <td><?= $capital ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">


        <div class="collapse navbar-collapse color" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://site.ua">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://site.ua/about-us">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://site.ua/services">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="http://site.ua/contacts">Disabled</a>
                </li>
            </ul>

        </div>
        </div>
    </nav>
</body>

</html