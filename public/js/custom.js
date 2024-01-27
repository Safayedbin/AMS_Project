import 'js-circle-progress'

// Create an instance of CircleProgress element
new CircleProgress('circle-progress', {
	max: 100,
	value: 60,
	textFormat: 'percent',
});

// Get the select element
var selectElement = document.getElementById("TestNo");

// Add an event listener for when the select value changes
selectElement.addEventListener("change", function() {
    // Get the selected value
    var selectedValue = selectElement.value;

    // Run a loop based on the selected value
    for (var i = 0; i < selectedValue; i++) {
        // Your code here
        console.log(i);
    }
});
