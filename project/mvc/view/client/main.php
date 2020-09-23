<?php 
include_once 'view/client/helper/mainheader.php';
 ?>
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<?php foreach ($posts as $key => $post) {?>
        <div class="case">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
              <a href="?mod=client&c=home&act=show&id=<?php echo $post['id'] ?>" class="img w-100 mb-3 mb-md-0" style="background-image: url(../images/<?php echo $post['thumbnail']; ?>);"></a>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
              <div class="text w-100 pl-md-3">
                <h2><a href="?mod=client&c=home&act=show&id=<?php echo $post['id'] ?>"><?php echo $post['title']; ?></a></h2>
                <ul class="media-social list-unstyled">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                <div class="meta">
                  <p class="mb-0"><a href="#"><?php echo $post['created_at']; ?></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>          
<?php } ?>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class=""><a href="?mod=client&c=home&act=index">1</a></li>
            <li><a href="?mod=client&c=home&act=index&page=2">2</a></li>
            <li><a href="?mod=client&c=home&act=index&page=3">3</a></li>
            <li><a href="?mod=client&c=home&act=index&page=4">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>		
<?php 
include_once 'view/client/helper/mainfooter.php';
?>  				