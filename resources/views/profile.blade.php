<!DOCTYPE html>
<html>
<head>
<title>Profile</title
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
My Profile <br/>

@foreach ($customers as $key => $customer)

  {{$loop->iteration}}. Name : {{$customer['name']}} {{$customer['surname']}} <br/>
@endforeach
</body>
</html>
