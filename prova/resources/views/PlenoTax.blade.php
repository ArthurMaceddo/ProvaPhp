<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details - Salary Increase</title>
</head>
<body>
<h2>Position: Pleno</h2>

    <p>Name: {{ $employee['name'] }}</p>
    <p>Salary: {{ $employee['salary'] }}</p>
    <p>Job Description Number: {{ $employee['$descnumber'] }}</p>
    <p>Hours Worked: {{ $employee['workedHours'] }}</p>
    <p>Tax: {{ $taxs }}</p>
</body>
</html>