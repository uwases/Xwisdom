<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center>
   <h1> Welcome to X-WISEDOM TVET </h1> 
   <h3>This Website help School manager to manage the trainees assesment </h3>
   <a href="/Trade">Record trade</a>
   <a href="/Trainees">Record Trainees</a>
   <a href="/Marks">Record Assesment</a>
   <a href="/Viewreport">View report</a>
   <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit">Sohoka / Logout</button>
   </form>
   </center>
</body>
</html>