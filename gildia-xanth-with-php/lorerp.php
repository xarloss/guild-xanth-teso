<?php include("a_config.php"); ?>

<!DOCTYPE HTML>
<html>
    <head>  
        <?php include("resources/pages/head-tag-content-aktualnosci.php"); ?>
    </head>
    <body>   
        <header>
              <nav>
                <div class="row">
                <img src="resources/img/2.png" alt="Xanth logo" class="logo">
                <ul class="pages js--sub-nav">
                        <li><a <?php if ($CURRENT_PAGE == "index") {?>active<?php }?> href="index.php">Start</a></li>
                        <li><a <?php if ($CURRENT_PAGE == "aktualnosci") {?>active<?php }?> href="aktualnosci.php">Aktualności</a></li>
                        <li><a <?php if ($CURRENT_PAGE == "postacierp") {?>active<?php }?> href="postacierp.php">Postacie RP</a></li>
                        <li><a <?php if ($CURRENT_PAGE == "lorerp") {?>active<?php }?> href="lorerp.php">Lore RP</a></li>
                        <li><a <?php if ($CURRENT_PAGE == "forum") {?>active<?php }?> href="forum.php">Forum</a></li>  
                </ul>

                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            
            </nav>
        </header>
        
               
                       
        <section>
            <div class="row">
                
            </div>
        </section>
        <footer>
            <div class="row">
                <ul class="footer-nav">
                    <li><a href="index.php">Start</a></li>
                    <li><a href="aktualnosci.php">Aktualności</a></li>
                    <li><a href="postacierp.php">Postacie RP</a></li>
                    <li><a href="lorerp.php">Lore RP</a></li>
                    <li><a href="forum.php">Forum</a></li>
                </ul>
            </div>
            <div class="row">
                <p class="copyright">Copyright &copy; by Daniel Weber all rights reserved</p>
            </div>
        
        </footer>

        <?php include("resources/pages/scripts.php"); ?>
    </body>   
    
</html>
