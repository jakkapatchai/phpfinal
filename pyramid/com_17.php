<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($jakkapat=1; $jakkapat <= 4; $jakkapat++)
                {
                    echo ($com);
                    echo (10-$com);
                }
                echo ("\n");
            }
        ?>
    </pre>
</body>