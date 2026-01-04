<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mortadellove</title>
</head>
<body>
    <h1>Ciao {{$username}},</h1>
    <h3>grazie per averci contattato!</h3>
    <p>Di seguito troverai il riepilogo del tuo messaggio:</p>
    <ul>
        <li>email: {{$useremail}}</li>
        <li>Messaggio: {{$usermessage}}</li>
    </ul>
    <p>Cordiali salumi,</p>
    <p>lo staff di Mortadellove</p>
</body>
</html>