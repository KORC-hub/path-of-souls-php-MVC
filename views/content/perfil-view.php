<main class="main-perfil">
    <div class="perfil">
        <h1><?php echo "K.O.R.C.";?></h1>
    </div>
    <div class="user-line"></div>
    <div>
        <form class="update-scores" action="" method="POST">
            <h2>New score:</h2>
            <input  type="date" name="date-score" placeholder="Enter the date " autocomplete="off">
            <input type="number" name="new-score" placeholder="Enter your score" autocomplete="off">
            <input class="botons" type="submit" value="update">
        <form>
    </div>
    <div class="user-record" >
        <div class="date">
            <h1><?php echo "11/05/2004";?></h1>
        </div>
        <div class="myuser">
            <h1><?php echo "K.O.R.C.";?></h1>
        </div>
        <div class="myscore">
            <h1><?php echo "0";?></h1>
        </div>
    </div>
    <div class="logout">
        <i class='bx bx-log-out'></i>
        <h3>Logout</h3>
    </div>
</main>