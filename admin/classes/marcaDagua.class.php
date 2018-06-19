<?php
class MarcaDagua {


	
	protected $imageSrc;
	protected $waterMark;
	protected $waterMarkSrc;
	protected $padding;
	protected $opacity;
	protected $imageSrcType;
	protected $waterMarkType;
	protected $waterMarkWidth;
	protected $waterMarkHeight;
	protected $img;
	protected $imgX;
	protected $imgY;

	public function __construct($imageSrc, $waterMarkSrc, $destination, $padding = 10, $opacity = 80, $quality = 90)
	{

			die("img");
		$this->imageSrc = $imageSrc;
		$this->waterMarkSrc = $waterMarkSrc;
		$this->padding = $padding;
		$this->opacity = $opacity;
		// Valida o tipo do arquivo
		$this->imageSrcType = $this->getImageType($this->imageSrc);
		$this->waterMarkType = $this->getImageType($this->waterMarkSrc);


		if (!$imageSrc || !$waterMarkSrc) {
			throw new Exception("Source files left", 333);
		}

		// WaterMark
		if ($this->waterMarkType == 'image/jpg' || $this->waterMarkType == 'image/jpeg') {
			$this->waterMark = imagecreatefromjpeg($waterMarkSrc);
		} else if ($this->waterMarkType == 'image/png') {
			$this->waterMark = imagecreatefrompng($waterMarkSrc);
		} else if($this->waterMarkType == 'image/gif') {
			$this->waterMark = imagecreatefromgif($waterMarkSrc);
		}

		// Original img src
		if ($this->imageSrcType == 'image/jpg' || $this->imageSrcType == 'image/jpeg') {
			$this->img = imagecreatefromjpeg($imageSrc);
		} else if ($this->imageSrcType == 'image/png') {
			$this->img = imagecreatefrompng($imageSrc);
		} else if($this->imageSrcType == 'image/gif') {
			$this->img = imagecreatefromgif($imageSrc);
		}

		$this->getWaterMarkInfo();
		$this->getImgInfo();
		//imagecopymerge($this->img, $this->waterMark, $this->imgX, $this->imgY, 0, 0, $this->waterMarkWidth, $this->waterMarkHeight, $this->opacity);
		//imagecopy($this->img, $this->waterMark, $this->imgX, $this->imgY, 0, 0, $this->waterMarkWidth, $this->waterMarkHeight);

		imagecopy($this->img, $this->waterMark, 0, $this->imgY, 0, 0, $this->waterMarkWidth, $this->waterMarkHeight);

		if ($this->imageSrcType == 'image/jpg' || $this->imageSrcType == 'image/jpeg') {
			$this->img = imagejpeg($this->img, $destination, $quality);
		} else if ($this->imageSrcType == 'image/png') {
			$this->img = imagepng($this->img);
		} else if($this->imageSrcType == 'image/gif') {
			$this->img = imagegif($this->img);
		}
		
		imagedestroy($this->waterMark);			   
		imagedestroy($this->img);	
		return $this->img;

	}

	private function getImgInfo() {
		$imgSize = getimagesize($this->imageSrc);
		$this->imgX = $imgSize[0] - $this->waterMarkWidth - $this->padding; // get X position
		$this->imgY = $imgSize[1] - $this->waterMarkHeight - $this->padding; // get X position
	}

	private function getWaterMarkInfo() {
		$wmsize = getimagesize($this->waterMarkSrc);
		$this->waterMarkWidth = $wmsize[0]; // get watermark width
		$this->waterMarkHeight = $wmsize[1]; // get watermark height
	}

	private function getImageType($src)
	{
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$type = finfo_file($finfo, $src);
		finfo_close($finfo);
		die("type");
		return $type;
	}

}