<main class="main-rank">
    <div class="rank">
        <div class="info">
            <h1>Site</h1>
            <h2>User</h2>
            <h3>Score</h3>
        </div>
        <?php for ($i=1; $i < 5; $i++) { ?>
        <div class="user-rank">
            <?php if ($i == 1) {?>
            <div class="site">
                <i class='bx bxs-trophy' style="color: yellow;"></i>
            </div>
            <?php }elseif ($i == 2) {?>
            <div class="site">
                <i class='bx bxs-trophy' style="color: #cdd8d5;"></i>
            </div>
            <?php }elseif ($i == 3) {?>   
            <div class="site">
                <i class='bx bxs-trophy' style="color: #de954d;"></i>
            </div>
            <?php }else {?>
            <div class="site">
                <h1><?php echo "# ".$i;?></h1>
            </div>
            <?php } ?>
            <div class="user">
                <h1><?php echo "K.O.R.C.";?></h1>
            </div>
            <div class="score">
                <h1><?php echo "10234";?></h1>
            </div>
        </div>
        <?php }?>
    </div>
</main>