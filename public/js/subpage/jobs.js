$(document).ready(function() {
	$("#jobtitle").keyup(function() {
		console.log('jobtitle', $('#jobtitle').val());
		filterJobs();
	});

	$("#joblist").change(function() {
		console.log('joblist', $('#joblist').val());
		filterJobs();
	});

	$("#authorities").change(function() {
		console.log('authorities', $('#authorities').val());
		filterJobs();
	});

	function filterJobs() {
		console.log('filterJobs');
		$('.jobs tr').each(function() {
			var showThisRow = true;

			if ($('#jobtitle').val()) {
				var enTitle = $(this).find('td:nth-child(1)').html().toLowerCase();
				var jpTitle = $(this).find('td:nth-child(2)').html().toLowerCase();
				var inputTitle = $('#jobtitle').val().toLowerCase();
				if (!enTitle.includes(inputTitle) && !jpTitle.includes(inputTitle)) {
					showThisRow = false;
				}
			}

			if ($('#joblist').val()) {
				if ($('#joblist').val() !== $(this).find('td:nth-child(3)').html()) {
					showThisRow = false;
				}
			}

			if ($('#authorities').val()) {
				console.log($('#authorities').val(), $(this).find('td:nth-child(4)').html());
				if ($('#authorities').val() !== $(this).find('td:nth-child(4)').html()) {
					showThisRow = false;
				}
			}

			if (showThisRow) {
				$(this).show();
			} else {
				$(this).hide();
			}

		});
	}
});