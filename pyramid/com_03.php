<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 4; $com++)
            {
             echo$com,$com+4;
                 for ($jakkapat=1; $jakkapat <= $com+4; $jakkapat++)
                {
                    echo "*";
                }
            echo "\n";
            }
        ?>
    </pre>
