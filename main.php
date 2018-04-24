<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header('location:login.php');
  }
  $db = new Database;
  $posts = $db->query('SELECT posts.*,users.name,users.avatar FROM posts INNER JOIN users ON posts.user_id = users.id order by posts.created_at desc');
 ?>
<div class="container">
  <div style="margin:50px">
  </div>
  <div class="row">
    <?php foreach ($posts as $post) { ?>
      <?php
        $comments = $db->query("SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id INNER JOIN posts ON comments.post_id = posts.id WHERE comments.post_id = $post->id");
        $likes = $db->query("SELECT * FROM likes WHERE post_id = ".$post->id);
       ?>
      <div class="col-md-8 offset-2 portfolio-item ">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo $post->photo ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <img src="<?php echo $post->avatar ?>" alt="" class="img-responsive" width="50px">
              <a href="#"><?=$post->name?></a> <a href="action/like.php?post_id=<?php echo $post->id ?>" class="btn btn-primary pul-md-right">Like</a>
            </h4>
            Like : <?php echo count($likes) ?>
            <hr>
            <p class="card-text"><?=$post->caption?></p>
            <hr>
            <?php foreach ($comments as $comment): ?>
              <p><b><?php echo $comment->username ?></b> <?php echo $comment->comment ?></p>
            <?php endforeach; ?>
            <form action="action/comment.php" method="post">
              <input type="hidden" name="post_id" value="<?php echo $post->id ?>">
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="comments" name="comment">
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
  $user = $db->query("SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'");
  $user = $user[0];
 ?>
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-control" action="action/update.php" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id=""><?php echo $user->name ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <a href="action/logout.php" class="btn btn-primary pull-right">Logout</a>
          <hr>
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user->name ?>">
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" id="" placeholder="" value="<?php echo $user->username ?>" disabled>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" placeholder="" name="email" value="<?php echo $user->email ?>">
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" id="" placeholder="" name="phone" value="<?php echo $user->phone ?>">
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" id="" placeholder="" name="address" value="<?php echo $user->address ?>">
          </div>
          <hr>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" id="" placeholder="" name="password" placeholder="Kosongkan jika tidang mengubah">
          </div>
          <div class="form-group">
            <label for="">Profile Picture</label>
            <input type="file" class="form-control" id="" placeholder="" accept="image/*" name="avatar">
            <p class="help-block">Pastikan foto profile berukuran 1x1</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <form action="action/upload.php" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="">Upload Picture</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Picture</label>
            <input type="file" class="form-control" id="" placeholder="" name="avatar" required>
          </div>
          <div class="form-group">
            <label for="">Caption</label>
            <textarea class="form-control" name="caption" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </div>
    </form>
  </div>
</div>
