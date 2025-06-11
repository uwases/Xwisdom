<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade</title>
</head>
<body>
   <x-nav>
</x-nav>  <br> <br><center>
   <form action="{{route('Trainee')}}" method="post">
     @if(Session::has('success'))
        {{Session::get('success')}}
        @endif
           @if(Session::has('fail'))
        {{Session::get('fail')}}
        @endif
@csrf

   <label for="">Trinee first name</label>
   <input type="text" name="fname" id=""><br><br>
   @error('fname'){{$message}}@enderror <br>
    <label for="">Trinee last name</label>
   <input type="text" name="lname" id=""><br><br>
     @error('lname'){{$message}}@enderror <br>
  
<button>Add trainee</button>
</center>
   </form> 
</body>
</html>