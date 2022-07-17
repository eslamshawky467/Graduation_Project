<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

@foreach ($users as $user)
<div class="row">
    <div class="col-md-6">
        <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs6I8Bt8Po0aldgDWzt0f3ohvIucu16I162g&usqp=CAU" alt="John" style="width:100%">
        <a href="{{url('chatnow/'.$user->id)}}" >  <h1>{{$user->name}}</h1></a>
        <p class="title">{{$user->email}}</p>
        <p>Harvard University</p>
        
        <p><button></button></p>
      </div>
    </div>
</div>

@endforeach


</body>
</html>
