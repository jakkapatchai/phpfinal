<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($jakkapat=$com; $jakkapat <= 7; $jakkapat++)
                {
                    echo ("*");
                }
                echo ($com);
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }
                echo (8-$com);
            echo ("\n");
            }
        ?>
    </pre>
</body>