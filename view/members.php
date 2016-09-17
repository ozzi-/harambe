<?php
	$membersFilePath=__DIR__."/../data/members";
	$membersFileContent = @file_get_contents($membersFilePath,true);
	if($membersFileContent=== FALSE){
		die("Error loading the members file. Please call the admin silly names for his crime.");
	}
	$membersFileContent=preg_replace( "/\r|\n/", "", $membersFileContent);
	$members = explode("+",$membersFileContent);
	$memberCount = count($members);
?>
<h2>Members (<?= $memberCount ?>)</h2>
<b>Legend:</b><br>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Supreme Leader
<span class="glyphicon glyphicon-heart" aria-hidden="true"></span> First Lady
<span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Veteran
<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Member
<br><br>
<div class="row">
	<ul class="list-group">
		<div class="col-md-6">
		<?php 
		$arrayMiddle=floor($memberCount/2);
		$arrayMiddle=$memberCount % 2 == 0?$arrayMiddle:$arrayMiddle+1;
		foreach ($members as $index=>$member){
			if($index==$arrayMiddle){
				?></div><div class="col-md-6"><?php
			}
			if (strpos($member,":") === false) {
				$memberStatusGlyph="chevron-up";
				$memberName=$member;	
			}else{
				$memberName=substr($member,2);
				$memberStatus=substr($member,0,1);
				$memberStatusGlyph=getMemberStatusRepresentation($memberStatus);
			}
		?>
			<li class="list-group-item">
				<span class="glyphicon glyphicon-<?= $memberStatusGlyph ?>" aria-hidden="true"></span> [GW] <?= $memberName ?>
			</li>
		<?php } ?>
		</div>
	</ul>
</div>
Last updated: <?= date ("d/m/Y H:i:s", filemtime($membersFilePath)); ?>
<?php 
	function getMemberStatusRepresentation($memberStatus){
		switch ($memberStatus) {
			case 'm': // member
				return "chevron-up";
			case 'l': // leader
				return "star";
			case 'v': // veteran
				return "bookmark";
			case 'f': // fl
				return "heart";
			default :
				return "chevron-up";
		}
	}
?>
