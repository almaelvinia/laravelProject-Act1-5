<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>

<h2>Update Student</h2>

<form method="POST" action="/update">
    @csrf
    @foreach ($students as $student)
        <input type="hidden" name="id" value="{{ $student->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>

        <label>Age:</label>
        <input type="number" name="age" value="{{ $student->age }}" required><br>

        <label>Gender:</label>
        <select name="gender" required>
            <option {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
        </select><br><br>

        <button type="submit">Update</button>
    @endforeach
</form>

</body>
</html>
