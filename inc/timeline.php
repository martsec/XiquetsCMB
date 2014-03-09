<?php
function tlcolor(){

	$ran = rand(0,6);
	$icon = tlicon();
	if ($ran==0){
		echo '<div class="timeline-badge"> '.$icon.' </div>';
	}elseif($ran==1){
		echo '<div class="timeline-badge warning"> '.$icon.' </div>';
	}elseif($ran==2){
		echo '<div class="timeline-badge danger"> '.$icon.' </div>';
	}elseif($ran==3){
		echo '<div class="timeline-badge info"> '.$icon.' </div>';
	}elseif($ran==4){
		echo '<div class="timeline-badge success"> ' .$icon.' </div>';
	}
}

function tlicon(){
	$ran = rand(0,9);
	if ($ran==0){
		return '<span class="glyphicon glyphicon-picture"></span>';
	}elseif($ran==1){
		return '<span class="glyphicon glyphicon-star"></span>';
	}elseif($ran==2){
		return '<span class="glyphicon glyphicon-play"></span>';
	}elseif($ran==3){
		return '<span class="glyphicon glyphicon-record"></span>';
	}elseif($ran==4){
		return '<span class="glyphicon glyphicon-bullhorn"></span>';
	}elseif($ran==5){
		return '<span class="glyphicon glyphicon-thumbs-up"></span>';
	}elseif($ran==6){
		return '<span class="glyphicon glyphicon-globe"></span>';
	}
}

$GLOBALS['anterior']=2; 
function tlinverted(){
	$actual=rand(0,1);
	echo 'class="'.$GLOBALS['anterior'];
	if($actual==1){ //1 indica a la dreta
		echo ' timeline-inverted';
	}
	if($actual!=$GLOBALS['anterior'] and $GLOBALS['anterior']!=2){
		$ran=rand(0,3);
		if($ran==1 or $ran==0){
			echo ' tlamunt1';
		}elseif($ran==2){
			echo ' tlamunt2';
		}elseif($ran==3){
			echo ' tlamunt3';
		}
	}
	echo '"';
	$GLOBALS['anterior']=$actual;
}

?>
