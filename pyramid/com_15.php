<?php include("yheader.php"); ?>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                for ($c = 1; $c <= 6-$com; $c++)
                echo ($com);
                for ($c = 1; $c <= $com; $c++)
                echo "  ";
                for ($c = 2; $c <= $com; $c++)
                echo "  ";
                for ($c = 1; $c <= 6-$com; $c++)
                echo ($com);
                echo ("\n");
            }
        ?>
    </pre>
</body>