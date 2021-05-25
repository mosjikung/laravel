<html>

<title>ยินดีต้อนรับสู่หน้าadmin</title>
<body>
<?php
              $user = "Mosjikung";
              $arr = array("Home","about","contact");
              ?>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquid provident, necessitatibus earum sunt eveniet deleniti aspernatur, accusamus ducimus commodi dignissimos. Laboriosam nesciunt voluptas architecto eos ad commodi culpa ratione!</p>
              <h1>This is {{$user}}</h1>
              @foreach($arr as $menu)
              <a href= "">{{$menu}}</a>
              @endforeach
              <ul>
              @for($i=0; $i<=5; $i++)
              
                            <li>{{$i}}</li>
              @endfor
              </ul>
             
</body>

              
</html>