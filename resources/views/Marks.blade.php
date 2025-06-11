
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Record marks</title>
</head>
<body> <center>
         <x-nav>
</x-nav>  <br> <br>
   <form action="{{route('marks')}}" method="post">
    @csrf
   Trainne name 
   <select name="trainee_id" >
        <option value="">-- Select trainee name --</option>
    
    @foreach($view as $trainee)
        <option value="{{ $trainee->id }}">{{ $trainee->Traineefname }}</option>
    @endforeach 
</select> <br><br> 
<span style="color:red">@error('tranee_id'){{$message}}@enderror </span><br>

Trade 
<select name="trade_id" >
      <option value="">-- Select trade name --</option>
    @foreach($select as $trade)
        <option value="{{ $trade->id }}">{{ $trade->Trade_name }}</option>
    @endforeach
</select><br> <br>
<span style="color:red">@error('trade_id'){{$message}}@enderror </span><br>
Level
<select name="trade_id" >
    
    @foreach($select as $trade)
        <option value="{{ $trade->id }}">{{ $trade->Trade_level }}</option>
    @endforeach
</select><br> <br>
<span style="color:red">@error('trade_id'){{$message}}@enderror </span><br>

Module name 
<select name="trade_id" >
    @foreach($select as $trade)
        <option value="{{ $trade->id }}">{{ $trade->Module_name}}</option>
    @endforeach
</select><br> <br>
<span style="color:red">@error('trade_id'){{$message}}@enderror </span><br>

Formative assessment <br>
<input type="number" name="formative_assessment" > <br> <br>
<span style="color:red">@error('formative_assessment'){{$message}}@enderror </span><br>
Summative assesment <br>
<input type="number" name="summative_assessment" > <br> <br>
<span style="color:red">@error('summative_assessment'){{$message}}@enderror </span><br>
 <button type="submit">Save marks</button>
 </center>
 </form>
</body>
</html>