<?php
    include("../partials/header.inc.php");
?>
<?php
    if(isset($_POST['submit']))
    {
        
    }
?>
<div class="container-fluid d-flex justify-content-center mt-4 ">
    <h2>Voucher Bill</h2>
</div>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" placeholder="Enter Date">
        </div>
        <div class="form-group" >
            <label for="particular">Client</label>
            
            <select class="form-control" name="client" id="client">

            </select>

        </div>
        <div class="form-group" id="panNumDiv">
            <label for="pan-number">PAN Number</label>
            <input type="text" class="form-control" id="pan_number" placeholder="Enter PAN Number">
        </div>
         <div id="error-message" style="display: none;"></div>
        <div id="success-message" style="display: none;"></div>

        <div class="form-group">
            <label for="particular">particular</label>
            <textarea class="form-control" id="particular" rows="3" placeholder="Enter particular"></textarea>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" class="form-control" id="amount" placeholder="Enter amount">
        </div>
        <div class="container-fluid d-flex justify-content-center m-3">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="../js/bill-client.js"></script>
<?php include('../partials/footer.inc.php'); ?>
