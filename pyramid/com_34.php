<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 3; $com++)
            {
                for ($jakkapat=3; $jakkapat >= $com; $jakkapat--)
                {
                    echo ("  ");
                }
                echo ("*");
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ($com);
                }
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo ($com);
                }
                echo ("*");
                
            echo ("\n");
            }
            for ($com=1; $com <= 2; $com++)
            {
                for ($jakkapat=1; $jakkapat <= $com+1; $jakkapat++)
                {
                    echo ("  ");
                }
                echo ("*");
                for ($jakkapat=$com; $jakkapat <= 2; $jakkapat++)
                {
                    echo (3-$com);
                }
                for ($jakkapat=$com; $jakkapat <= 1; $jakkapat++)
                {
                    echo (3-$com);
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>