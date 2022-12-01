<?php require_once "../cfg/config.php"; ?>
    <?php
        $sql = "SELECT * FROM user"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
            
        foreach($data as $user){ ?>
<?php echo $user['email']." ".$user['username'] .($user['admin'] == 1?" - Admin":"");?>
        <?php } ?>