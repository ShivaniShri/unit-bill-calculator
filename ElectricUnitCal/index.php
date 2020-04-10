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
            <?php
            if(isset($_POST['submit'])){

                $unit = $_POST['unit'];
                $sum = 0;

                if(!empty($unit)){

                    if($unit<=50){
                        $sum = $unit * 9;
                        echo '<p>₹ 9 for ',$unit,' unit consumed = ₹ ',$sum,'</p>';

                        echo '<p>---------------------------------------------------------------------------------------</p>';
                        echo '<pre>Total Unit = ',$unit,'                  Total Bill = ₹ ',$sum,'</pre>';
                    }
                    elseif($unit>50 && $unit<=100){
                        $sum = 50 * 9;
                        echo '<p>₹ 9 for 50 unit consumed = ₹ ',$sum,'</p>';
                        $sum1 = ($unit - 50) * 12;
                        echo '<p>₹ 12 for next ',($unit - 50),' unit consumed = ₹ ',$sum1,'</p>';

                        echo '<p>---------------------------------------------------------------------------------------</p>';
                        echo '<pre>Total Unit = ',$unit,'                  Total Bill = ₹ ',$sum + $sum1,'</pre>';
                    }
                    else{
                        $sum = 50 * 9;
                        echo '<p>₹ 9 for 50 unit consumed = ₹ ',$sum,'</p>';
                        $sum1 = 50 * 12;
                        echo '<p>₹ 12 for next 50 unit consumed = ₹ ',$sum1,'</p>';
                        $sum2 = ($unit - 100) * 15;
                        echo '<p>₹ 15 for next ',($unit - 100),' unit consumed = ₹ ',$sum2,'</p>';

                        echo '<p>---------------------------------------------------------------------------------------</p>';

                        echo '<pre>Total Unit = ',$unit,'                  Total Bill = ₹ ',$sum + $sum1 + $sum2,'</pre>';
                    }
                }
            }
            ?>
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