// Get the current date
const currentDate = new Date();
    
// Options for formatting the date
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

// Format the date according to the options
const formattedDate = currentDate.toLocaleDateString('en-US', options);

// Display the formatted date
document.getElementById('currentDate').textContent = formattedDate;