<title><?=$title?></title>
<style>
  .at { color:red; }
  nav { display:flex; }
  nav > div > a { display:block; padding:4px; }
</style>
<nav>
  <div><a class="<?=$pageCode == "home" ? "at" : ""?>" href="index.php">홈</a></div>
  <div><a class="<?=$pageCode == "pf" ? "at" : ""?>" href="pf.php">포트폴리오</a></div>
  <div><a class="<?=$pageCode == "aboutMe" ? "at" : ""?>" href="aboutMe.php">자기소개</a></div>
</nav>
<h2><?=$title?></h2>