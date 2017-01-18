<?php
namespace Evolution\pdp\struct_type\Facade;

use Evolution\pdp\struct_type\Facade\Bj;
use Evolution\pdp\struct_type\Facade\Qh;
use Evolution\pdp\struct_type\Facade\Fd;
use Evolution\pdp\struct_type\Facade\Hgd;

class FacadeMooc
{
	private $bj;
	private $fd;
	private $qh;
	private $hgd;

	public function __construct()
	{
		$this->bj = new Bj();
		$this->fd = new Fd();
		$this->qh = new Qh();
		$this->hgd = new Hgd();
	}
	
	public function studyEnglish($value='')
	{
        $this->bj->studyEnglish();
        $this->fd->studyEnglish();
        $this->qh->studyEnglish();
        $this->hgd->studyEnglish();
	}

	public function studyMath($value='')
	{
        $this->bj->studyMath();
        $this->qh->studyMath();
        $this->fd->studyMath();
        $this->hgd->studyMath();
	}

	public function studyComputer($value='')
	{
        $this->bj->studyComputer();
        $this->qh->studyComputer();
        $this->fd->studyComputer();
        $this->hgd->studyComputer();
	}
}