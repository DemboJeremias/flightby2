<?php require_once 'include/header.php'; ?>
<?php require_once ('controller/home_controller.php'); ?>



    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAPfMpfzU7xd0yyeFOeK68Va6IsyyREUm0&libraries=geometry"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




    <div class="banner">
        <img class="banner-image" src="image/fly-mo.jpg">
    </div>


    <div class="booking">
        <form  action="table.php" method="post">
            <h2 id="title">Flight Search</h2>
            <label class="DepLabel">Departure</label>
            <select id="flight-from" name="Flight from">
            <option value="Stansted">Stansted</option>
            </select>


            <label class="DestLabel">Destination</label>
            <select name="dest">
                <option value="all">All Destination</option>
                <option value=<?=$glasgow?>><?=$glasgow?></option>
                <option value=<?=$dublin?>><?=$dublin?></option>
                <option value=<?=$paris?>><?=$paris?></option>
                <option value=<?=$madrid?>><?=$madrid?></option>
                <option value=<?=$brussels?>><?=$brussels?></option>
                <option value=<?=$manchester?>><?=$manchester?></option>
            </select>


            <label class="DepDateLab">Departing Date</label>
            <input name="date" value=<?=$date1?> type="date" >
            <input  id="search" type="submit" value="Search">
        </form>
    </div>
            <div>
                <br><a href="javascript:$('body').css({'zoom':parseFloat($('body').css('zoom'))+0.1})">Zoom in</a><br>
                <br><a href="javascript:$('body').css({'zoom':parseFloat($('body').css('zoom'))-0.1})">Zoom out</a></div>
            <div id="map">




            </div>


<?php require_once 'include\_footer.php'; ?>

