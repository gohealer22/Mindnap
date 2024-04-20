<html>
<head>
    <link rel="icon" type="image/x-icon" href="images/image12.png">
    <title>Our Counsellors </title>
    <link rel="stylesheet" href="howpg.css" />
</head>
<body>
    
    <nav>
        <div class="topnav1">
            <?php
            include('commonheader.php');
            ?>

          </div> 
      </nav>

    <table  height="100%" width="100%" >

        <tr><td height="30%" colspan="3">
                <section class="a">        
                    
                <?php
                include('line.php');
                ?>

                </section>
            </td>
        </tr>
   
        <tr>
                <?php
                include('coun1.php');
                ?>

        </tr>
   
        <tr>
                <?php
                include('coun2.php');
                ?>

        </tr>

    </table>

    <table class="footer" height="50%" width="100%" bgcolor="#27313b">
        
                <?php
                include('footer.php');
                ?>

    </table>
    
</body>
</html>
