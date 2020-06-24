<?php

require_once('model/media.php');

function showDetail($id){

    //echo $_GET['id'];
    //echo $id;

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
    //$medias = Media::filterMedias( $search );

    $medias = Media::mediaDetails($id);

    require('view/detailView.php');

}


