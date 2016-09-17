<?php
/**
 * Created by PhpStorm.
 * User: saurabh
 * Date: 16/9/16
 * Time: 5:05 PM
 */


if(isset($_GET)){
    $total = 290;
    $page_size = '10';
    $page = '1';
    if (isset($_GET['page_size'])) {$page_size = $_GET['page_size'];}
    if (isset($_GET['page'])) {$page = $_GET['page'];}
    $start = (($page-1)*$page_size)+1;
    $end = $start + $page_size;
    $payload = array();
    $payload['count'] = $total;
    $payload['results'] = array();
    for ($i=$start; $i<$end;$i++) {
        $selected = array();
         $selected['id'] = $i;
         $selected['image'] = "http://onlinecoder.in/club-miku-images/image-".$i.".jpg";
         $selected['name'] = "image-".$i.".jpg";
        $payload['results'][$i] = $selected;
    }
    echo json_encode($payload);

}

?>