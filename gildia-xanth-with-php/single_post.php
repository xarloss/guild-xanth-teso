<?php include('a_config.php'); ?>
<?php require_once('resources/pages/public_functions.php') ?>

<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<!DOCTYPE HTML>
<html>
    <head>  
        <?php include('resources/pages/head-tag-content-aktualnosci.php'); ?>
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
                    <div class="banner">
                        <div class="login_div">
                            <form action="aktualnosci.php" method="post" >
                            <h3>Panel logowania</h3>
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password"  placeholder="Password"> 
                            <button class="btn" type="submit" name="login_btn">Zaloguj się</button>
                            </form>
                        </div>
                    </div>
                  	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
				</div>
			<?php endif ?>
			</div>
			<!-- // full post div -->
			
			<!-- comments section -->
			<!--  coming soon ...  -->
		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
                      </div>
            
            </nav>
        </header>          
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

        <?php include('resources/pages/scripts.php'); ?>
    </body>   
    
</html>
