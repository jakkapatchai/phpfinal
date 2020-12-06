<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 7; $com++)
            {
                 for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("  ");
                }
                for ($jakkapat=6; $jakkapat >= $com; $jakkapat--)
                {
                    echo (($jakkapat-1)%2);
                }
                echo (($com)%2);
                
                for ($jakkapat=$com; $jakkapat <= 6; $jakkapat++)
                {
                    echo (($jakkapat-1)%2);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>