
$( document ).ready(function() {
    "use strict";
	
	// Bar chart 1
	new Chart(document.getElementById("bar-chart1"), {
		type: 'bar',
		data: {
		  labels: ["January", "February", "March", "April", "May"],
		  datasets: [
			{
			  label: "Dataset",
			  backgroundColor: ["#689f38", "#38649f","#389f99","#ee1044","#ff8f00"],
			  data: [8545,6589,5894,4985,1548]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'My dataset'
		  }
		}
	});
	
	// Bar chart 2
	new Chart(document.getElementById("bar-chart2"), {
		type: 'bar',
		data: {
		  labels: ["June", "July", "August", "September", "October"],
		  datasets: [
			{
			  label: "Dataset",
			  backgroundColor: ["#689f38", "#38649f","#389f99","#ee1044","#ff8f00"],
			  data: [8545,6589,5894,4985,1548]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'My dataset'
		  }
		}
	});
	

	
}); // End of use strict
