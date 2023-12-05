<form method="post" action="{{ route('students.update', ['student' => $student->id]) }}">   @csrf
    <div class="form-group">
        <label for="title">Név:</label> <br>
        <input type="text" class="form-control" name="name" value="{{$student->name}}" />
    </div>
    <div class="form-group">
        <br> <label for="title">E-mail cím:</label><br>
        <input type="email" class="form-control" name="email" value="{{$student->email}}" />
    </div>
    <div class="form-group">
        <br> <label for="grade">Jegy</label><br>
        <input type="text" class="form-control" name="grade" value="{{$student->grade}}" />
    </div><br>
    <button style="width: 170px" type="submit" class="btn btn-primary">Update</button>
</form>
