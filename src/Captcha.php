<?php
namespace Saratonite\Tools;

class Captcha {


	protected $texture  = 'texture.jpg';

	protected $image;

	protected $text;


	public function setText($text= ""){
		$this->text = $text;
	}


	public function  make(){

	$this->image = imagecreatefromjpeg(__DIR__.'/'.$this->texture);

			$red=rand(100,255); 
			$green=rand(100,255);
			$blue=rand(100,255);

	$text_color=imagecolorallocate($this->image,255-$red,255-$green,255-$blue);

		

	/*
		this adds the text stored in $image_text to our 
		capcha image
	*/
	$text=imagettftext($this->image,16,rand(-10,10),rand(10,30),rand(25,35),$text_color,__DIR__."/fonts/courbd.ttf",$this->text);

	header("Content-type:image/jpeg");
	header("Content-Disposition:inline ; filename=secure.jpg");	
	imagejpeg($this->image);

	}

	protected function generateRandom(){

	}


}