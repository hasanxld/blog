<?php include('includes/header.php'); ?>
<div class="post-list">
  <h2>Latest Posts</h2>
  <?php
  include('../config/db.php');
  $query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
  $result = mysqli_query($conn, $query);

  while ($post = mysqli_fetch_assoc($result)): ?>
    <div class="post">
      <h3><?php echo $post['title']; ?></h3>
      <p><?php echo substr($post['content'], 0, 100); ?>...</p>
      <a href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
    </div>
  <?php endwhile; ?>
</div>
<?php include('includes/footer.php'); ?>