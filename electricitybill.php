<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h1>Electricity Bill Calculator</h1>
    <form method="post">
        <label for="units">Enter Units Consumed:</label>
        <input type="number" id="units" name="units" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units = $_POST['units'];
        $bill = calculateBill($units);
        echo "<h2>Total Bill: ₹ $bill</h2>";
    }

    function calculateBill($units) {
        $rate = 5; // assuming ₹5 per unit
        $bill = $units * $rate;
        return $bill;
    }
    ?>
</body>
</html>
