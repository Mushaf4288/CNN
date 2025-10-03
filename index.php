<?php
// Dummy featured news
$featured = [
  ["title" => "Breaking: Global Markets Surge", "desc" => "Stocks around the world rise as investor confidence grows.", "link" => "article.php?id=1"],
  ["title" => "AI Takes Over Journalism?", "desc" => "Experts discuss how AI is reshaping the newsroom.", "link" => "article.php?id=2"],
];
$categories = ["World", "Sports", "Technology", "Entertainment"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>CNN Clone - Home</title>
  <style>
    body { margin:0; font-family:Arial, sans-serif; background:#f4f4f4; }
    header { background:#cc0000; color:#fff; padding:15px; text-align:center; font-size:28px; }
    nav { background:#333; padding:10px; text-align:center; }
    nav a { color:white; text-decoration:none; margin:0 15px; font-weight:bold; }
    .featured { display:flex; flex-wrap:wrap; justify-content:center; padding:20px; background:#fff; }
    .news-card { width:300px; margin:10px; background:#eee; border-radius:8px; padding:15px; }
    .news-card h3 { margin-top:0; color:#cc0000; }
    .news-card p { font-size:14px; }
    footer { text-align:center; padding:15px; background:#333; color:white; margin-top:30px; }
  </style>
</head>
<body>

<header>CNN Clone</header>

<nav>
  <?php foreach ($categories as $cat): ?>
    <a href="category.php?name=<?= urlencode($cat) ?>"><?= $cat ?></a>
  <?php endforeach; ?>
</nav>

<section class="featured">
  <?php foreach ($featured as $news): ?>
    <div class="news-card" onclick="location.href='<?= $news['link'] ?>'">
      <h3><?= $news['title'] ?></h3>
      <p><?= $news['desc'] ?></p>
    </div>
  <?php endforeach; ?>
</section>

<footer>&copy; 2025 CNN Clone | Built in PHP</footer>

</body>
</html>
