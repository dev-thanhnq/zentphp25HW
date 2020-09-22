<?php 
include_once 'view/client/helper/mainheader.php';
$i = 0;
$j = 0;
 ?>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	
            <h2 class="mb-3"><?php echo $post['title']; ?></h2>
            <span class="subheading"><?php echo $post['created_at']; ?></span>
            <p class="mb-5">
              <img src="../images/<?php echo $post['thumbnail'] ?>" alt="" class="img-fluid">
            </p>
            <p>
            	<?php echo $post['content']; ?>
            </p>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5" style="width: 20%">
                <img src="../images/<?php echo $user['avatar'] ?>" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h5><?php echo $user['name'] ?></h5>
                <span><?php echo $user['email']; ?></span>
              </div>
            </div>
            <div class="pt-5 mt-5">
              <h3 class="mb-5">1 bình luận</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="../images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Trả lời</a></p>
                  </div>
                </li>   
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Để lại bình luận</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Họ tên *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Mật khẩu *</label>
                    <input type="password" class="form-control" id="password">
                  </div>

                  <div class="form-group">
                    <label for="message">Bình luận</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Bình luận" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <?php foreach ($categories as $key => $category) { 
                		$j++;
                		if ($j < 6) {    		
                ?>
                			<li><a href="?mod=client&c=home&act=showPostsCategory&id=<?php echo $category['id'] ?>"><?php echo $category['name']; ?><span class="ion-ios-arrow-forward"></span></a></li>
                <?php 
            		  	}
            		  } 
            	?>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Bài viết liên quan</h3>
              <?php foreach ($posts as $key => $post) { 
              			$i++;
              			if ($i < 5) {           				
              ?>
              				<div class="block-21 mb-4 d-flex">
				                <a class="blog-img mr-4" style="background-image: url(../images/<?php echo $post['thumbnail']; ?>);"></a>
				                <div class="text">
				                  <h3 class="heading"><a href="?mod=client&c=home&act=show&id=<?php echo $post['id'] ?>"><?php echo $post['title']; ?></a></h3>
				                  <div class="meta">
				                    <div><a href="#"><span class="icon-calendar"></span><?php echo $post['created_at']; ?></a></div>
				                    <div><a href="#"><span class="icon-chat"></span><?php echo $post['view_count']; ?></a></div>
				                  </div>
				                </div>
				            </div>
              <?php
              			}
              		} 
              ?>
            </div>

            
          </div>

        </div>
      </div>
    </section> <!-- .section -->

 <?php 
include_once 'view/client/helper/mainfooter.php';
?>  				