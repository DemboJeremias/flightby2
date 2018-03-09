<span class="is_error"><?= $error?></span>
<span class = "not_error"><?=$message?></span>
<form action="index.php" method="post">
    <div>
        <label for="knumber">K-Number</label>
        <input type="text"name="knumber" id="knumber"placeholder="Enter your K-Number" maxlength="8"minlength="8" required>
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" name="pw" id="pw"placeholder="Enter your password">
    </div>
    <div>
        <label for="lecture">Lecture ID</label>
        <input type="text" name="lecture"id="lecture"placeholder="Enter your lecture ID">
    </div>
    <div>
        <input type="hidden" name="code" value="add_me" >
        <input type="submit"value="I'm here!">
    </div>
</form>
