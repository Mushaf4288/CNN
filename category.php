<?php
$category = $_GET['name'] ?? 'Unknown';
$articles = [
  ["title" => "$category Headline 1", "desc" => "Short description for news 1.", "link" => "article.php?id=3"],
  ["title" => "$category Headline 2", "desc" => "Short description for news 2.", "link" => "article.php?id=4"],
];
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= $category ?> News</title>
  <style>
    body { font-family:Arial; background:#fafafa; }
    header { background:#cc0000; color:white; padding:15px; text-align:center; }
    .news-section { padding:20px; display:flex; flex-wrap:wrap; justify-content:center; }
    .news-card { width:280px; background:#fff; margin:10px; padding:15px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); cursor:pointer; }
    .news-card h3 { color:#cc0000; }
    .news-card p { font-size:14px; }
  </style>
</head>
<body>

<header><?= $category ?> News</header>

<section class="news-section">
  <?php foreach ($articles as $article): ?>
    <div class="news-card" onclick="location.href='<?= $article['link'] ?>'">
      <h3><?= $article['title'] ?></h3>
      <p><?= $article['desc'] ?></p>
    </div>
  <?php endforeach; ?>
</section>

</body>
</html>
