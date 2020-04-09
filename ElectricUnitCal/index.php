<!DOCTYPE html>
<html lang="en">
<head>
    <title>Electricity Bill Calculator</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="d1">
    <div class="d2">
        <h1>Electricity Unit Consumed - Bill Calculator</h1>
    </div>

    <div class="d3">
        <div class="d4">
            <h2>Enter the Unit for Billing</h2>
            <form method="post" action="index.php">
                <input type="number" name="unit" placeholder="Enter the Electric Unit Consumed" required><br>
                <input type="submit" name="submit" value="Calculate" required>
            </form>
        </div>

        <div class="d5">
            <h2>Receipt - Electricity Bill</h2>
            <p>---------------------------------------------------------------------------------------</p>

            <p>---------------------------------------------------------------------------------------</p>
            <a href="index.php"><button>Reset</button></a>
            <button id="print">Print</button>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script async defer src="script.js"></script>
</body>
</html>