<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trades</title>
</head>
<body>
    <x-nav></x-nav>
    <br><br>
    <center>
        <h1>View the Trade</h1>

        <table border="2" cellpadding="10">
            <tr>
                <th>Trade ID</th>
                <th>Trade Name</th>
                <th>Trade Level</th>
                <th>Module Name</th>
                <th>Action</th>
            </tr>

            @php
                $grouped = $select->groupBy('Trade_name');
            @endphp

            @foreach($grouped as $tradeName => $tradeGroup)
                @php
                    $levels = $tradeGroup->groupBy('Trade_level');
                @endphp

                @foreach($levels as $level => $levelGroup)
                    @foreach($levelGroup as $index => $item)
                        <tr>
                            <td>{{ $item->id }}</td>

                            @if ($loop->first && $loop->parent->first)
                                <td rowspan="{{ $tradeGroup->count() }}">{{ $tradeName }}</td>
                            @endif

                            @if ($loop->first)
                                <td rowspan="{{ $levelGroup->count() }}">{{ $level }}</td>
                            @endif

                            <td>{{ $item->Module_name }}</td>

                            <td>
                                <a href="{{ route('edit', ['id' => $item->id]) }}">Edit</a>
                                <form action="{{ route('delete', $item->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach
        </table>
    </center>
</body>
</html>
