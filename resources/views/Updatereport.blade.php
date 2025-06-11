<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update report</title>
</head>
<body>
    <x-nav>
  </x-nav> <br><br> <center>
    <h1>Update report</h1>
    <form action="{{route('updatereport',$modify->id)}}" method="post">
    @csrf
    @method('PUT')
 Trainee name
<select name="trainee_id">
    
    @foreach($view as $trainee)
        <option value="{{ $trainee->id }}" 
            @if($trainee->id == $modify->trainee_id) selected @endif>
            {{ $trainee->Traineefname }}
        </option>
    @endforeach
</select>
<br><br>

Trade
<select name="trade_id">
    @foreach($select as $trade)
        <option value="{{  $trade->id  }}" 
            @if($trade->id == $modify->trade_id) selected @endif>
            {{$trade->Trade_name}}
        </option>
    @endforeach
</select>
<br><br>
 
Level
<select name="trade_id">
    @foreach($select as $trade)
        <option value="{{  $trade->id  }}" 
            @if($trade->id == $modify->trade_id) selected @endif>
            {{$trade->Trade_level}}
        </option>
    @endforeach
</select>
<br><br>
 Module name 
    <select name="trade_id">
    @foreach($select as $trade)
        <option value="{{  $trade->id  }}" 
            @if($trade->id == $modify->trade_id) selected @endif>
            {{$trade->Module_name}}
        </option>
    @endforeach
</select>
<br><br>


Formative assessment <br>
<input type="number" name="formative_assessment"  value='{{$modify->formative_assessment}}'> <br> <br>
<span style="color:red">@error('formative_assessment'){{$message}}@enderror </span><br>
Summative assesment <br>
<input type="number" name="summative_assessment" value='{{$modify->summative_assessment}}' > <br> <br>
<span style="color:red">@error('summative_assessment'){{$message}}@enderror </span><br>
 <button type="submit">Update marks</button>

    </form>
    </center>
</body>
</html>