<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>


    <div class="mailHeader">
        <h1>Email from Website!</h1>
    </div>
    <div class="mailTitle">
        <h3>New User send a mail.</h3>
    </div>

    <div class="mailBody">
        <p>
           User First name is : {{ $emailData->fName }} <br>
           User Last Name is : {{ $emailData->lName }} <br>
           User Email is : {{ $emailData->email }} <br>
           User Phone is : {{ $emailData->phone }} <br>
           User Mobile Number is : {{ $emailData->mobphone }} <br>
           User Address is : {{ $emailData->addr1 }} <br>
           User Second Address is : {{ $emailData->addr2 }} <br>
           User City is : {{ $emailData->city }} <br>
           User State is : {{ $emailData->state }} <br>
           User Country is : {{ $emailData->country }} <br>
           User Zip code is : {{ $emailData->zip }} <br>
           User asked this : {{ $emailData->help }}. <br>
        </p>
    </div>

</body>

</html>
