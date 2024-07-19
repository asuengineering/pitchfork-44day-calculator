
document.addEventListener('DOMContentLoaded', function () {

	function updateCalcDates() {
		var startDateInput = document.querySelector('#fourty-tracker input#start');
		var calcDatesElement = document.querySelector('#fourty-tracker .calc-dates');

		// Check if the element exists before adding the event listener
		if (startDateInput) {
			startDateInput.addEventListener('change', function () {
				var startDate = new Date(startDateInput.value);

				// Date calcs in JS are weird. TODO: Figure out why I had to add one extra day here.
				var future30Date = new Date(startDate.getTime() + (31 * 24 * 60 * 60 * 1000));
				var future45Date = new Date(startDate.getTime() + (46 * 24 * 60 * 60 * 1000));

				var options = { year: 'numeric', month: '2-digit', day: '2-digit' };
				var formatted30Date = future30Date.toLocaleDateString(undefined, options);
				var formatted45Date = future45Date.toLocaleDateString(undefined, options);

				var dd30Element = calcDatesElement.querySelector('.calc-day.day-30');
				var dd45Element = calcDatesElement.querySelector('.calc-day.day-45');

				dd30Element.textContent = formatted30Date;
				dd45Element.textContent = formatted45Date;
			});
		} else {
			console.log('Not listening.');
		}
	}

	// Call the function to set up the event listener
	updateCalcDates();
});
