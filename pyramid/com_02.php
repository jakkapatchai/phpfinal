<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 4; $com++){
                for ($jakkapat=$com; $jakkapat <= $com+2; $jakkapat++){
                echo $jakkapat;
               }
               for ($jakkapat=1; $jakkapat <= ($com + 2); $jakkapat++){
                echo "*";
               }
               echo "\n";
               }
        ?>
    </pre>
    <?php include("yfooter.php"); ?>