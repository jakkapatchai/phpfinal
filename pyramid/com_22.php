<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                echo ("*");
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("  ");
                }
                for ($jakkapat=$com; $jakkapat <= 5; $jakkapat++)
                {
                    echo ($com);
                }
                for ($jakkapat=$com; $jakkapat <= 4; $jakkapat++)
                {
                    echo ($com);
                }
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("  ");
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>