<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                
                for ($jakkapat=5; $jakkapat >= $com; $jakkapat--)
                {
                    echo ($jakkapat);
                }
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }  
                for ($jakkapat=$com; $jakkapat <= 5; $jakkapat++)
                {
                    echo ($jakkapat);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>