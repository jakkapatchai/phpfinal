<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($jakkapat=7; $jakkapat >= $com; $jakkapat--)
                {
                    echo (8-$jakkapat);
                }
                for ($jakkapat=1; $jakkapat <= $com+2; $jakkapat++)
                {
                    echo ("*");
                }
                echo ($com+2) ;  
            echo ("\n");
            }
        ?>
    </pre>
</body>