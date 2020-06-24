<?php

require_once('model/media.php');

function showDetail($id){

    //echo $_GET['id'];
    echo $id;

    $search = isset( $_GET['titl'] ) ? $_GET['titl'] : null;
    $medias = Media::filterMedias( $search );

    //require('view/mediaListView.php');


}