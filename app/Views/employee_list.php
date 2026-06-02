<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #5a48e7;
            color: white;
        }
        .it-row {
            font-weight: bold;
            background-color: #42d2e2;
        }
    </style>
</head>
<body>

<h1>Employee List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee): ?>
            <?php if ($employee['department'] == 'IT'): ?>
                <tr class="it-row">
            <?php else: ?>
                <tr>
            <?php endif; ?>
                <td><?= htmlspecialchars($employee['id']) ?></td>
                <td><?= htmlspecialchars($employee['first_name']) ?></td>
                <td><?= htmlspecialchars($employee['last_name']) ?></td>
                <td><?= htmlspecialchars($employee['email']) ?></td>
                <td><?= htmlspecialchars($employee['department']) ?></td>
                <td><?= htmlspecialchars($employee['salary']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>