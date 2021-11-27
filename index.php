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
    $isAdmin= true;
    if($isAdmin):    
     ?> 
       <h2>Code for admin</h2>
     <?php  else: ?> 
   
        <h2>Code for guest</h2>

        <?php endif  ?>
</body>
</html