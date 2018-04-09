<?php require_once 'include/header.php'; ?>
<?php require_once ('controller/home_controller.php'); ?>



<script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDShdkQRl2pAOq4dwi-UX66scZqLA-3BjM&libraries=geometry"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="banner">
    <img class="banner-image" src="image/fly-mo.jpg">
</div>

<div class="booking">
    <form action="table.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="depLabel">Departure</label>
            </div>
            <div class="col-75">
                <select id="flight-from" name="Flight from">
                    <option id="stanstedOpt" value="Stansted">Stansted</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label class="DestLabel">Destination</label>
            </div>
            <div class="col-75">
                <select id="destSelect" name="dest">
                    <option value="all">All Destination</option>
                    <option value=<?=$glasgow?>><?=$glasgow?></option>
                    <option value=<?=$dublin?>><?=$dublin?></option>
                    <option value=<?=$paris?>><?=$paris?></option>
                    <option value=<?=$madrid?>><?=$madrid?></option>
                    <option value=<?=$brussels?>><?=$brussels?></option>
                    <option value=<?=$manchester?>><?=$manchester?></option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label class="DepDateLab">Departing Date</label>
            </div>
            <div class="col-75">
                <input id="dateInp" name="date" value=<?=$date1?> type="date" >
>>>>>>> 78deee25434ff3b54a47be068458a5e0e8ef20f2

            </div>
        </div>

        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

            <div>
                <br><a href="javascript:$('body').css({'zoom':parseFloat($('body').css('zoom'))+0.1})">Zoom in</a><br>
                <br><a href="javascript:$('body').css({'zoom':parseFloat($('body').css('zoom'))-0.1})">Zoom out</a></div>
            <div id="map">

            </div>


<?php require_once 'include\_footer.php'; ?>

