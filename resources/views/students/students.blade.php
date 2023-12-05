<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students :: List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        tr:nth-child(even){
            background-color: rgba(120,120,120,.1);
        }
        th{
            background-color: green;
            color: white;
        }
        tr:hover{
            background-color: rgba(0,0,220, 0.1);
        }
    </style>
</head>
<body>

<section class="section">
    <div class="container">
        @if(session('status'))
            <p>{{ session('status') }}</p>
        @endif
        <a href="{{route('newStudent')}}">New student</a>
        <h1 class="title">Student List</h1>

        <table class="table is-bordered is-fullwidth">
            <thead>
            <tr>
                <th>email</th>
                <th>Name</th>
                <th>Grade</th>
                <th colspan="2" style="text-align: center">action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($students) > 0)
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->grade }}</td>
                        <td><a href="{{ route('students.edit', $student->id) }}">Update</a></td>
                        <td>
                            <form action="{{ route('students.destroy',$student->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>Nincs találat</p>
            @endif

            </tbody>
        </table>

    </div>
</section>

</body>
</html>
