<html>
    <head>
        test course
    </head>
    <body>
        <?php
        \koolreport\widgets\koolphp\Table::create(array(
            "dataSource"=>$this->dataSource("result")
        ));
            ?>
    </body>
</html>