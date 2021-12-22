<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logadmi</title>
</head>
<body>
<strong>

Welcome : {{ Auth::user()->name }} <br> 
<p>Your email is : {{ Auth::user()->email }} </p>

</strong>
    

</body>
</html>