<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

<h1>Student List</h1>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="2" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Actions</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->gender }}</td>
    <td>
        <a href="{{ route('std.updateView', $student->id) }}">Edit</a> |
        <a href="{{ route('std.studentDelete', $student->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
    </td>

    </tr>
    @endforeach
</table>

<h2>Add New Student</h2>
<form method="POST" action="/add-new">
    @csrf
    <label>Name:</label><input type="text" name="name" required><br>
    <label>Age:</label><input type="number" name="age" required><br>
    <label>Gender:</label>
    <select name="gender" required>
        <option value="">Select</option>
        <option>Male</option>
        <option>Female</option>
    </select><br><br>
    <button type="submit">Add Student</button>
</form>

</body>
</html>
