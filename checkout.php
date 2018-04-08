<?php require_once ('include/header.php'); ?>

<div class="col-lg-15 col-m12">

    <h2 id="title"> Payment Details </h2>
    <form>
        <label>Card Type</label>
        <select>
            <option value="visa">Visa</option>
            <option value="visa debit">Visa Debit</option>
            <option value="master card">Master Card</option>
            <option value="credit card">Credit Card</option>
        </select>
        <br><br>
        <label>Name on The Card</label>
        <input type="text" name="card"> </input>
        <br><br>
        <label>Card Number</label>
        <input type="text" name="card_number"> </input>
        <br><br>
        <label>Expired Date</label>
        <input type="datet" name="expired"> </input>
        <label>Security Code</label>
        <input type="text" name="secury"> </input>

    </form>



</div

































<?php require_once 'include\_footer.php'; ?>
