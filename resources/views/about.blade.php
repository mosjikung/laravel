<html>
<title>About</title>
<body>
              <h1>Welcome to My world</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque laborum repellat incidunt eos architecto assumenda placeat voluptate nostrum consequuntur explicabo! Facilis soluta esse dolorem voluptas ipsum, eius recusandae! Nulla, quis!</p>
              <p>ที่อยู่ :: {{$city}}</p>
              <p>เบอร์ :: {{$telephone}}</p>
              <p>เบอร์ :: {{$email}}</p>
              <p>{{$error}}</p>
              <p>{{$status}}</p>
              

              <a href="{{url('/')}}">Home</a>
              <a href="{{url('/admin')}}">Admin</a>
              <a href="{{url('/member')}}">Member</a>
              <a href="{{route('about')}}">About</a>
</body>

</html>