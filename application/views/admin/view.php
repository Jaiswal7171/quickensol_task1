<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<body>
    <h1>Employee List</h1>
    <?php if (!empty($employee_data)): ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Designation</th>
            </tr>
            <?php foreach ($employee_data as $employee): ?>
                <tr>
                    <td><?php echo htmlspecialchars($employee->name); ?></td>
                    <td><?php echo htmlspecialchars($employee->email); ?></td>
                    <td><?php echo htmlspecialchars($employee->desgination); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No employees found.</p>
    <?php endif; ?>
</body>
</html>