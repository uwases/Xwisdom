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
   <form action="{{route('trade')}}" method="post">
     @if(Session::has('success'))
        {{Session::get('success')}}
        @endif
           @if(Session::has('fail'))
        {{Session::get('fail')}}
        @endif
@csrf

   <label for="">Trade name</label>
   <input type="text" name="name" id=""><br><br>
   @error('name'){{$message}}@enderror <br>
   <label for="">Levels</label>
   <input type="text" name="level" id=""><br><br>
    @error('level'){{$message}}@enderror <br>
      <label for="">Module_name</label>
   <input type="text" name="module_name" id=""><br><br>
    @error('module_name'){{$message}}@enderror <br>
<button>Add trade</button>
</center>
   </form> 
</body>
</html>