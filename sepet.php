<?php
session_start();
ob_start();
include("php/connect.php");
require "function.php";
	
	if(isset($_GET["hayir"])){
			$allItems = $cart->getItems();
		/*	if(count($allItems[$_GET["hayir"]]) > 1){
				$sql = "SELECT * FROM icerik WHERE id=" . $_GET["hayir"];
				$query = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
				$ekle = $cart->add($_GET["hayir"], 1, [
				  'id'  => $_GET["hayir"],
				  'baslik'  => $query[0]["baslik"],
				  'image'  => $query[0]["resim"],
				  'fiyat'  => $query[0]["fiyat"]
				]);
			}*/
		$sql = "SELECT * FROM icerik WHERE id=" . $_GET["hayir"];
		$query = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		$ekle = $cart->add($_GET["hayir"], 1, [
		  'id'  => $_GET["hayir"].rand(100,999),
		  'baslik'  => $query[0]["baslik"],
		  'image'  => $query[0]["resim"],
		  'fiyat'  => $query[0]["fiyat"]
		]);
		$ekle = $cart->add($_GET["hayir"], 1, [
		  'id'  => $_GET["hayir"].rand(100,999),
		  'baslik'  => $query[0]["baslik"],
		  'image'  => $query[0]["resim"],
		  'fiyat'  => 0
		]);
		if($ekle){
			header("Location: https://parfumsihri.com/sepetim.php");
		}
	}
	if(isset($_GET["evet"])){
		$allItems = $cart->getItems();
			$sql = "SELECT * FROM icerik WHERE id=" . $_GET["normalurun"];
			$query = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
			$ekle = $cart->add($_GET["normalurun"], 1, [
			  'id'  => $_GET["normalurun"].rand(100,999),
			  'baslik'  => $query[0]["baslik"],
			  'image'  => $query[0]["resim"],
			  'fiyat'  => $query[0]["fiyat"]
			]);
			$sql = "SELECT * FROM icerik WHERE id=" . $_GET["evet"];
			$query = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
			$ekle = $cart->add($_GET["normalurun"], 1, [
			  'id'  => $_GET["evet"].rand(100,999),
			  'baslik'  => $query[0]["baslik"],
			  'image'  => $query[0]["resim"],
			  'fiyat'  => 0
			]);
			if($ekle){
				header("Location: https://parfumsihri.com/sepetim.php");
			}
	}