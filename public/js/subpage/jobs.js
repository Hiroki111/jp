$(document).ready(function() {
	$("#jobtitle").keyup(function() {
		filterJobs();
	});

	$("#joblist").change(function() {
		filterJobs();
	});

	$("#authorities").change(function() {
		filterJobs();
	});

	function filterJobs() {
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