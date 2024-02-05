<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email file</title>
</head>
<body>
<h2>User details </h2><br>
<pre style="font-size : 19"><strong> Name       :  </strong>{{ $data['name'] }} </pre> <br><hr>
<pre style="font-size : 19"><strong> Email      :  </strong>{{ $data['email'] }} </pre> <br><hr>
<pre style="font-size : 19"><strong> Phone      :  </strong>{{ $data['phone'] }} </pre> <br><hr>
<pre style="font-size : 19"><strong> Purpose    :  </strong>{{ $data['purpose'] }} </pre> <br><hr>
<pre style="font-size : 19"><strong> Subject    :  </strong>{{ $data['subject'] }} </pre> <br><hr>
<pre style="font-size : 19"><strong> Message    :  </strong><div>{{ $data['message'] }}</div> </pre> <br>
</body>
</html>