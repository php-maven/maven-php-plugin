<html>
    <head>
        <?php

            # BOOTSTRAP FILE
            # SAMPLE by (c) banaalo - banaalo-mdeia.de; marco schulz

            include_once 'css/Css.php';
            include_once 'javascript/JavaScript.php';

            echo css();
            echo javascript();

        ?>
        <title>PHP MAVEN SAMPLE WEBAPP PAGE</title>
    </head>

    <body>

        <!-- insert code -->
        <?php

            require_once 'lib/org/phpmaven/library/LibraryClass.php';
            
            use org\phpmaven\library\LibraryClass as Library;

            Library::getInstance();
            echo Library::doFoo(true);

        ?>
    </body>
</html>
