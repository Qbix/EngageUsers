Q.page("EngageUsers/welcome", function () { 
	
	// code to execute after page finished loading
	$('.EngageUsers_welcome .Users_avatar_tool')
	.click(function () {
		var apiKey = $('#apiKey').val();
		var topicUrl = $('#topicUrl').val();
		var attitude = $('#attitude').val();
		var matches = topicUrl.match('(.*)(\/t\/)(.*)');
		if (!matches) {
			return alert("Please enter forum topic URL");
		}
		if (!topicUrl) {
			return alert("Please enter forum API key");
		}
		Q.req('AI/discourse', 'data', function (err, result) {
			var fem = Q.firstErrorMessage(err, result);
			if (fem) {
				return Q.alert(fem);
			}
			// otherwise, success!
			Q.alert("Posted as " + result.slots.data.username);
			window.open(topicUrl, 'discourse');
			Q.handle(Q.url('posts'));
		}, { 
			method: 'post' ,
			fields: {
				userId: this.Q.tool.state.userId,
				topicUrl: topicUrl,
				apiKey: apiKey,
				attitude: attitude
			}
		});
	});
	
	return function () {
		// code to execute before page starts unloading
	};
	
}, 'EngageUsers');