<h2>Join</h2>
<div class="row">
	<div class="col-md-6">
		So you want to join? (We usually are online from 17:00-22:00 UTC.)<br>
		Well then better connect to our Discord.<br>
		<br>
		Or check our Steamgroup:
		https://steamcommunity.com/groups/GOWATTSU
	</div>
	<div class="col-md-6">
		<iframe src="https://discordapp.com/widget?id=223039036929867777&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
	</div>
</div>

	<?php 
		$steamgroupXMLURL = 'http://steamcommunity.com/groups/GOWATTSU/memberslistxml/?xml=1';
		$steamgroupXML = simplexml_load_file($steamgroupXMLURL,'SimpleXMLElement', LIBXML_NOCDATA);
		$steamgroupJSON = json_encode($steamgroupXML);
		$steamgroupArray = json_decode($steamgroupJSON,TRUE);
		echo($steamgroupArray['groupID64']);
		//echo $sxml->memberList->groupDetails->groupName;
		//echo $sxml->memberList->groupDetails->headline;
		//echo $sxml->memberList->groupDetails->groupName;
		//echo $sxml->memberList->groupDetails->avatarMedium;
		//echo $sxml->memberList->groupDetails->memberCount;
		//echo $sxml->memberList->groupDetails->membersInChat;
		//echo $sxml->memberList->groupDetails->membersInGame;
		//echo $sxml->memberList->groupDetails->membersOnline;
		//echo $sxml->memberList->memberCount;
		
		//foreach($sxml->memberList->members as $member){
		//	echo $member->steamID64."<br>";
			// http://steamcommunity.com/profiles/76561198081600695/?xml=1 GET avatarOcpm and onlineState
		//}

	?>