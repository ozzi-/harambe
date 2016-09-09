<?php
	$membersFilePath=__DIR__."/../data/members";
	$membersFileContent = @file_get_contents($membersFilePath,true);
	if($membersFileContent=== FALSE){
		die("Error loading the members file. Please call the admin silly names for his crime.");
	}
	$membersFileContent=preg_replace( "/\r|\n/", "", $membersFileContent);
	$members = explode("+",$membersFileContent);
?>
<h2>Members (<?= count($members) ?>)</h2>
<b>Legend:</b><br>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Supreme Leader
<span class="glyphicon glyphicon-heart" aria-hidden="true"></span> First Lady
<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Member
<br><br>
<ul class="list-group">
<?php 
foreach ($members as $member){
	if(strlen($member)<1){continue;} // trailing ; or not, we don't care
	if (strpos($member,":") === false) {
		$memberStatusGlyph="star";
		$memberName=$member;	
	}else{
		$memberName=substr($member,2);
		$memberStatus=substr($member,0,1);
		switch ($memberStatus) {
			case 'm': // member
				$memberStatusGlyph="chevron-up";
				break;
			case 'l': // leader
				$memberStatusGlyph="star";
				break;
			case 'f': // fl
				$memberStatusGlyph="heart";
				break;
			default :
				$memberStatusGlyph="chevron-up";
		}
	}
?>
	<li class="list-group-item">
		<span class="glyphicon glyphicon-<?= $memberStatusGlyph ?>" aria-hidden="true"></span> [GW] <?= $memberName ?>
	</li>
<?php } ?>
</ul>
