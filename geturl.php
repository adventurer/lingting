<?php
$url = $_GET['url'];
$json = shell_exec("youtube-dl -j $url");
$arr = json_decode($json,true);


if (stripos($url,'youku')) {
  foreach ($arr['formats'] as $v) {
    if ($v['format_id'] == 'h3' ) {
      echo $v['url'];
    }
  }
}elseif(stripos($url,'bilibili')){
      echo $arr['url'];
}
