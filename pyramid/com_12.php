<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("  ");
                }
                 for ($jakkapat=$com; $jakkapat <= 4 ; $jakkapat++)
                {
                    echo ($jakkapat);
                }
                echo ("5");
                for ($jakkapat=4; $jakkapat >= $com; $jakkapat--)
                {
                    echo (10-$jakkapat);
                }
                echo ("\n");
            }
        ?>
    </pre>
</body>