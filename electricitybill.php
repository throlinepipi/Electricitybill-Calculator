<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="electricitybill.css">
    <title>Electricity Bill</title>
</head>

<body>

    <center>
    <h1 class="title">Electricity Bill Calculation of Easten District of Yangon</h1> 
    </center>

    <div class="information">
        
        <form method="GET" action="">
            <table class="input">
                <thead>
                    <tr>
                        <td colspan="2" align="center"><i>Enter your information.</i></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label for="firstname">First Name:</label></td>
                        <td><input type="text" name="firstname" id="firstname" class="other" /> </td>
                    </tr>
                    <tr>
                        <td><label for="lastname">Last Name:</label></td>
                        <td><input type="text" name="lastname" id="lastname" class="other"/> </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" name="email" id="email" class="other" /></td>
                    </tr>
                    <tr>
                        <td><label for="township">Township:</label></td>
                        <td>
                            <select name="township"  class="other">
                                <option selected disabled>Eastern District</option>
                                <option value="Botataung">Botataung</option>
                                <option value="Dagon Seikan">Dagon Seikan</option>
                                <option value="Dawbon">Dawbon</option>
                                <option value="Mingala Taungnyunt">Mingala Taungnyunt</option>
                                <option value="New Dagon East">New Dagon East</option>
                                <option value="New Dagon North">New Dagon North</option>
                                <option value="New Dagon South">New Dagon South</option>
                                <option value="Northokkalapa">Northokkalapa</option>
                                <option value="Pazundaung">Pazundaung</option>
                                <option value="Southokkalapa">Southokkalapa</option>
                                <option value="Tarmwe">Tarmwe</option>
                                <option value="Tharkata">Tharkata</option>
                                <option value="Thingangyun">Thingangyun</option>
                                <option value="Yankin">Yankin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="address">Address:</label></td>
                        <td><textarea rows="3" name="address" placeholder="Write your address." id="textarea" class="other" ></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="payment">Choose Payment:</label></td>
                        <td>
                            <input type="radio" name="payment" id="paymentc" class="radio" value="Cash" /><label for="paymentc">Cash</label>
                            <input type="radio" name="payment" id="paymentm" class="radio" value="Mobile Money" /><label for="paymentm">Mobile Money</label>
                            <br />
                            <input type="radio" name="payment" id="paymentb" class="radio" value="Mobile Banking" /><label for="paymentb">Mobile Banking</label>
                            <input type="radio" name="payment" id="paymentc" class="radio" value="Credit Card" /><label for="paymentc">Credit Card</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="date">Choose billing date:</label></td>
                        <td><input type="date" name="date" id="date" class="other" /></td>
                    </tr>
                    <tr>
                        <td><label for="tme">Choose billing time:</label></td>
                        <td><input type="time" name="time" id="time" class="other" /></td>
                    </tr>
                    <tr>
                        <td><label for="unit">Enter meter units of your home:</label></td>
                        <td><input type="number" name="unit" value="unit" id="unit" class="unit" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right"><input type="submit" name="total" class="calculate" value="Calculate" /></td>
                    </tr>
                </tbody>
            </table>
    </div>
        </form>

        <?php if (isset ($_GET['unit']) && isset ($_GET['township']) && isset ($_GET['payment']) ):?>
        <?php

        function onetothirty()
        {
            echo $_GET['unit'] * 35;
        }

        function thirtyonetofifty()
        {
            $a = $_GET['unit'] - 30;
            $b = $a * 50;
            $c = $_GET['unit'] - $a;
            $d = $c * 35;
            echo $b + $d;
        }

        function fiftyonetoseventyfive()
        {
            $a = $_GET['unit'] - 50;
            $b = $a * 70;
            $c = $_GET['unit'] - $a;
            $d = $c - 30;
            $e = $d * 50;
            $f = $c - $d;
            $g = $f * 35;
            echo $b + $e + $g;
        }

        
        
        
        if ($_GET['unit'] >=1 && $_GET['unit'] <=30 ){
            echo "<div class=invoice>";
            echo "<h1>Invoice</h1>";
            echo "Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['firstname']." " .$_GET['lastname'];
            echo "<br/> Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['email'];
            echo "<br/> Township: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['township'];
            echo "<br/> Address: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['address'];
            echo "<br/> Payment: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['payment'];
            echo "<br/> Billing Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['date'];
            echo "<br/> Billing Time: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['time'];
            echo "<br/> Total Units: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['unit'];
            echo "<br/> Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            onetothirty();  
            echo " kyats";         
        }

        else if ($_GET['unit'] >=31 && $_GET['unit'] <=50 ){
            echo "<div class=invoice>";
            echo "<h1>Invoice</h1>";
            echo "Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['firstname']." " .$_GET['lastname'];
            echo "<br/> Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['email'];
            echo "<br/> Township: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['township'];
            echo "<br/> Address: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['address'];
            echo "<br/> Payment: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['payment'];
            echo "<br/> Billing Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['date'];
            echo "<br/> Billing Time: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['time'];
            echo "<br/> Total Units: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['unit'];
            echo "<br/> Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            thirtyonetofifty(); 
            echo " kyats";            
        }

        else if ($_GET['unit'] >=51 && $_GET['unit'] <=75 ){
            echo "<div class=invoice>";
            echo "<h1>Invoice</h1>";
            echo "Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['firstname']." " .$_GET['lastname'];
            echo "<br/> Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['email'];
            echo "<br/> Township: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['township'];
            echo "<br/> Address: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['address'];
            echo "<br/> Payment: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['payment'];
            echo "<br/> Billing Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['date'];
            echo "<br/> Billing Time: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['time'];
            echo "<br/> Total Units: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['unit'];
            echo "<br/> Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            fiftyonetoseventyfive(); 
            echo " kyats";  
        }

        

        ?>
    </div>
        <?php endif; ?>

</body>

</html>