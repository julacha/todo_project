<?php include "../bootcamp_app/components/head.php"; ?>
<title>login</title>
    <link rel="stylesheet" href="style.css">
    <form action="?page=authenticate&sid=<?php echo $sid;?>" method="post">
        <label>Lietotajs</label>
        <input type="text" name="username">
        <label>Parole</label>
        <input type="password" name="password">

        <button type="submit">Ieiet</button>
    </form>
</body>