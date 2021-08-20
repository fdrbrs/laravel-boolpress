<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Email</title>
</head>
<body>
    <h1>You got mail 📧</h1>
    <p>Message from: {{ $data['full_name']}}, email: {{ $data['email']}}</p>
    <p>Message: {{ $data['message']}}</p>
</body>
</html>