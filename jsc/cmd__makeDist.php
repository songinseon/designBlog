<?php
require_once "data.php";

shell_exec("chcp 65001");

$srcPath = dirname(__DIR__);
$distPath = $srcPath . '/docs';
$compileNo = 0;

function compile($originFile) {
  $originFileName = basename($originFile);
  $originFileAndOpt = $originFile;
  
  if ( $originFileName == "article_detail.ssg.php" ) {
    $articles = &getArticles();

    foreach ( $articles as $article ) {
      $originFileAndOpt = $originFile . " " . $article['id'];

      $distFile = str_replace(".ssg.php", "_{$article['id']}.html", $originFile);
    
      compileItem($originFileAndOpt, $distFile);
    }
  }
  else if ( $originFileName == "article_list_by_tag.ssg.php" ) {
    $tags = &getTags();

    foreach ( $tags as $tag ) {
      $originFileAndOpt = $originFile . " " . $tag;

      $distFile = str_replace(".ssg.php", "_{$tag}.html", $originFile);

      compileItem($originFileAndOpt, $distFile);
    }
  }
  else if ( endsWith($originFileName, ".ssg.php") ) {
    $distFile = str_replace(".ssg.php", ".html", $originFile);
    compileItem($originFileAndOpt, $distFile);
  }
  else if ( endsWith($originFileName, ".php") ) {
    return;
  }
  else {
    $distFile = $originFile;
    compileItem($originFileAndOpt, $distFile);
  }
}

function compileItem($originFileAndOpt, $distFile) {
  global $compileNo;
  global $srcPath;
  global $distPath;

  $distFile = str_replace($srcPath, $distPath, $distFile);

  $distDirPath = dirname($distFile);

  if ( is_dir($distDirPath) == false ) {
    mkdir($distDirPath, 0777, true);
  }

  if ( strpos($distFile, ".html") !== false ) {
    $command = "c:\\xampp\\php\\php.exe {$originFileAndOpt} > {$distFile}";
    shell_exec($command);
  }
  else {
    copy($originFileAndOpt, $distFile);
  }

  adaptForStatic($distFile);

  echo "{$compileNo} : {$distFile} 생성됨\n";
  $compileNo++;
}

function adaptForStatic($distFileName) {

  if ( strpos($distFileName, ".html") === false ) {
    return;
  }

  $newSource = file_get_contents($distFileName);
  $newSource = str_replace(["&ext=html", "article_detail.ssg.php?id=", "article_list_by_tag.ssg.php?tag=", ".ssg.php"], [".html", "article_detail_", "article_list_by_tag_", ".html"], $newSource);
  file_put_contents($distFileName, $newSource);
}

@mkdir("docs");

$originFiles = getFiles();

@rename("docs/CNAME", "CNAME");
deleteDirectory("docs");

foreach ( $originFiles as $index => $originFile ) {
  $fileName = basename($originFile);

  if ( $fileName == "CNAME" ) {
    continue;
  }

  compile($originFile);
}

@rename("CNAME", "docs/CNAME");