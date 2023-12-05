<a href="{{route('getStudents')}}">Hallgatók listája</a>
<form method="post" action="{{route('addStudent')}}">
@csrf
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"/>
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" name="email"/>
</div>

<div class="form-group">
    <label for="grade">Grade:</label>
    <input type="number" class="form-control" name="grade"/>
</div>
<button type="submit" class="btn btn-primary">Add</button>
</form>
