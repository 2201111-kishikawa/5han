<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['email'])) {
  echo h($_SESSION['email']) . "さん<br>";
  echo "ログアウトしますか?<br>";
  echo "<a href='http://keen-usuki-0844.mond.jp/5han/ProductList.php'>ログアウトせずに商品一覧へ</a>";
  echo"<br>";
  echo "<a href='http://keen-usuki-0844.mond.jp/5han/ProductList.php'>ログアウト</a>";
  exit;
}

 ?>