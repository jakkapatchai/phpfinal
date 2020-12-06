<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                echo ($com);
                echo ("*");
                echo ($com+2);
                for ($jakkapat=1; $jakkapat <= $com+2; $jakkapat++)
                {
                    echo ("*");
                }  
            echo ("\n");
            }
        ?>
    </pre>
</body>