<?php
function add($id){
    setcookie('urun['.$id.']',true,time() + 10000);
}
function remove($id){
    setcookie('urun['.$id.']',true,time() - 10000);
}
function fullremove(){
    foreach ($_COOKIE["urun"] as $key=>$item) {
        setcookie('urun['.$key.']',true,time() - 10000);
    }
}
function hediyefullremove(){
    foreach ($_COOKIE["hediyeurun"] as $key=>$item) {
        setcookie('hediyeurun['.$key.']',true,time() - 10000);
    }
}
function hediyeurunekle($id){
    setcookie('hediyeurun['.$id.']',true,time() + 10000);
}
function removehediyeurun($id){
    setcookie('hediyeurun['.$id.']',true,time() - 10000);
}
?>