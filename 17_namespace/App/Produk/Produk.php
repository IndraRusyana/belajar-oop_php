<?php

abstract class Produk{
	protected $judul,
		    $penulis,
		    $penerbit,
		    $harga,
		    $diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function setJudul($judul){
		return $this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis($penulis){
		return $this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		return $this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}

	abstract public function getInfo();
}