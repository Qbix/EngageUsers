<div id='content'>
	<div class="EngageUsers_presentation_link">
		<a href="about"><?= $welcome['InvestorPresentation'] ?></a>
	</div>
	<h1><?= $welcome['TryItOut'] ?></h1>
	<ol>
		<li>
			<?= $welcome['GoToYourForum'] ?>
			<a href="https://meta.discourse.org/t/create-and-configure-an-api-key/230124"><?= $welcome['GenerateAPIKey'] ?></a>. <?= $welcome['OnlyForumOwners'] ?><br>
			<?= $welcome['DontHaveAForum?'] ?> <a href="https://qbix.com/communities"><?= $welcome['GetInTouchWithUs'] ?></a>
		</li>
		<li>
			<form>
				<table>
					<tr>
						<td>
							<?= $welcome['PasteAPIKey'] ?>
						</td>
						<td>
							<input id="apiKey" name="apiKey">
						</td>
					</tr>
					<tr>
						<td>
							<?= $welcome['URLOfTopicOrPost'] ?>
						</td>
						<td>
							<input id="topicUrl" name="topicUrl" autocomplete="url">
						</td>
					</tr>
					<tr>
						<td>
							<?= $welcome['ChooseAnAttitude'] ?>
						</td>
						<td>
							<select name="attitude" id="attitude">
								<option value="" selected="selected" disabled="disabled">
									<?= $welcome['WhatShouldItBe?'] ?>
								</option>
								<option value="agree + actionable">
									<?= $welcome['attitudes']["agree + actionable"] ?>
								</option>
								<option value="agree + expand">
									<?= $welcome['attitudes']["agree + expand"] ?>
								</option>
								<option value="agree + changeSubject">
									<?= $welcome['attitudes']["agree + changeSubject"] ?>
								</option>
								<option value="disagree + respectful">
									<?= $welcome['attitudes']["disagree + respectful"] ?>
								</option>
								<option value="disagree + emotive">
									<?= $welcome['attitudes']["disagree + emotive"] ?>
								</option>
								<option value="disagree + absurd">
									<?= $welcome['attitudes']["disagree + absurd"] ?>
								</option>
								<option value="disagree + authority">
									<?= $welcome['attitudes']["disagree + authority"] ?>
								</option>
							</select>
						</td>
					</tr>
				</table>
			</form>
		</li>
		<li>
			<?= $welcome['ClickOnTheBelowAgents'] ?>
			<br>
			<div class="EngageUsers_bots_list">
				<?php foreach (Communities::userIds(array(
					'idPrefixes' => array(
						// 'exclude' => 'bot-'
					)
				)) as $userId) {
					$icon = true;
					echo Q::tool('Users/avatar', compact('icon', 'userId'), uniqid());
				} ?>
			</div>
		</li>
		<li>
			<a href="https://xkcd.com/810/">Mission f*&#ing accomplished!</a>
		</li>
	</ol>

	<div style="padding: 100px;">
		&nbsp;
	</div>
	
</div>
