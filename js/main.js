window.onload = function() {

	var $doc = document,
		$win = window;

	var teamMember = $doc.querySelectorAll('.team-member');

	// Assign team member captions
	for (var x = 0; x < teamMember.length; x++) {

		var target = teamMember[x];
		var name = target.getAttribute('name');

		// Create caption
		var targetCaption = $doc.createElement('span');

		// Give it some data
		targetCaption.setAttribute('class', 'circle-grid-caption');
		targetCaption.innerHTML = name;

		// Add to the team member
		target.appendChild(targetCaption);

	}

}