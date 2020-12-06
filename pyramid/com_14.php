<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("  ");
                }
                 for ($jakkapat=0; $jakkapat < 2 ; $jakkapat++)
                {
                    echo ($jakkapat+$com);
                }
                for ($jakkapat=4; $jakkapat >= $com; $jakkapat--)
                {
                    echo ("  ");
                }
                for ($jakkapat=4; $jakkapat >= $com; $jakkapat--)
                {
                    echo ("  ");
                }
                for ($jakkapat=1; $jakkapat < 3; $jakkapat++)
                {
                    echo ((($com+1)*2)-($jakkapat+$com));
                }
            
            
                echo ("\n");
            }
        ?>
    </pre>
</body>