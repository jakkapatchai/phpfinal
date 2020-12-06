<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($jakkapat=$com; $jakkapat >= 1; $jakkapat--)
                {
                    echo ($jakkapat);
                }
                for ($jakkapat=$com; $jakkapat <= 4; $jakkapat++)
                {
                    echo ("  ");
                }
                for ($jakkapat=$com; $jakkapat <= 4; $jakkapat++)
                {
                    echo ("  ");
                }
                for ($jakkapat=$com; $jakkapat >= 1; $jakkapat--)
                {
                    echo ("*");
                }
                echo ("\n");
            }
        ?>
    </pre>
</body>