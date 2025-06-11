<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body> <center>
   
       <x-nav>
</x-nav>  <br> <br>
 <h1>View Report</h1>
    <table border="2">
        <tr>
            <th>Marks ID</th>
            <th>Trainee First Name</th>
            <th>Trainee Last Name</th>
            <th>Trade Name</th>
            <th>Trade Levels</th>
            <th>Module Name</th>
            <th>Formative Assessment</th>
            <th>Summative Assessment</th>
            <th>Percentage</th>
            <th>Decision</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach($select as $mark)
        <tr>
            <td>{{ $mark->id }}</td>
            <td>{{ $mark->trainee->Traineefname }}</td>
            <td>{{ $mark->trainee->Traineelname }}</td>
            <td>{{ $mark->trade->Trade_name }}</td>
            <td>{{ $mark->trade->Trade_level }}</td>
            <td>{{ $mark->trade->Module_name }}</td>
            <td>{{ $mark->formative_assessment }}</td>
            <td>{{ $mark->summative_assessment }}</td>
            <td>{{ $mark->percentage }}</td>
            <td>{{ $mark->decision }}</td>
            <td><a href="{{route('modify',['id'=>$mark->id])}}">Update</a></td>
            <td>
            <form action="{{route('delete3',$mark->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type='submit'>Remove</button>
            </form>
            
            </td>
        </tr>
        @endforeach

    </table>
    </center>
</body>
</html>
