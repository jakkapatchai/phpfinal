<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                echo ($com);
                for ($jakkapat=$com; $jakkapat <= 9; $jakkapat++)
                {
                    echo ("*");
                }
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("  ");
                }
                echo (6-$com);
            echo ("\n");
            }
        ?>
    </pre>
</body>