<?php include('a_config.php'); ?>
<?php require_once('resources/pages/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
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
                  <div class="title">
                      <h2> Aktualności</h2>
                  <?php foreach ($posts as $post): ?>
                  
	               <div class="post">
		              <img src="<?php echo BASE_URL . '/resources/img/' . $post['image']; ?>">
                       <?php if (isset($post['topic']['name'])): ?>
			<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>
                       
                       
		              <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			             <div class="post_info">
				            <h3><?php echo $post['title'] ?></h3>
				            <div class="info">
                                <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                <span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
                      </div>
            
            </nav>
        </header>          
        <section class="hero-text-box">
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

        <?php include('resources/pages/scripts.php'); ?>
    </body>   
    
</html>
