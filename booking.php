<!DOCTYPE html>
<?php
include './FunctionQuery.php';
include './header.php';
?>
<div style="margin-left: 8px;">
    <img src="images/img3.jpg" alt=""/>
    <div class="text" style="margin-bottom: 300px;">Packages</div>
</div>
<h2 style="text-align: center; font-size: 35px; color: #500;">Booking Form</h2>
<div class="container1" style="margin-bottom: 10px;">
    <form action="bookingConfirm.php" method="GET">
       <?php
            $id=$_GET["id"];
       ?> 
        <input type="hidden" id="fname" name="pid" value="<?php echo $id;?>" placeholder="">
        <label for="bdate">Booking Date</label>
        <input type="date" id="fname" name="date" placeholder="Booking Date">

        <label for="tp">Total Person</label>
        <input type="text" id="lname" name="tperson" placeholder="Total Person">

        <label for="amt">Amount</label>
        <input type="text" id="lname" name="amount" placeholder="Booking Amount">

        <input type="submit" value="Confirm">
    </form>
</div>
<?php include './Footer.php';?>
</body>
</html>

