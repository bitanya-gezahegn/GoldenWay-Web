

function toggleMenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
}

function showList(listId) {
    const lists = ['userList', 'driverList', 'operationsOfficerList', 'ticketOfficerList'];
    lists.forEach(id => {
        document.getElementById(id).style.display = id === listId ? 'block' : 'none';
    });
}

// Show specific lists based on submenu clicks
document.getElementById('userListMenu').addEventListener('click', function (event) {
    event.preventDefault();
    showList('userList');
});

document.getElementById('driverListMenu').addEventListener('click', function (event) {
    event.preventDefault();
    showList('driverList');
});

document.getElementById('operationsOfficerListMenu').addEventListener('click', function (event) {
    event.preventDefault();
    showList('operationsOfficerList');
});

document.getElementById('ticketOfficerListMenu').addEventListener('click', function (event) {
    event.preventDefault();
    showList('ticketOfficerList');
});

// Sidebar toggle to adjust content margin
document.getElementById('check').addEventListener('change', function () {
    const content = document.querySelector('.content');
    content.style.marginLeft = this.checked ? '250px' : '0';
});




document.querySelectorAll('.edit-icon').forEach((button) => {
    button.addEventListener('click', (event) => {
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const email = button.getAttribute('data-email');
        
        // Populate the form fields
        document.getElementById('row-id').value = id;
        document.getElementById('name').value = name;
        document.getElementById('email').value = email;
        
        // Show the popup form
        document.getElementById('popup-form').style.display = 'block';
    });
});

// Add event listeners to edit buttons dynamically
document.addEventListener("DOMContentLoaded", function() {
    const editButtons = document.querySelectorAll(".edit-user");

    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Get data from the button's data attributes
            const userId = button.getAttribute("data-id");
            const userName = button.getAttribute("data-name");
            const userEmail = button.getAttribute("data-email");
            const userRole = button.getAttribute("data-role");

            // Fill the popup form with this data
            document.getElementById("row-id").value = userId;
            document.getElementById("name").value = userName;
            document.getElementById("email").value = userEmail;
            document.getElementById("role").value = userRole;

            // Show the popup
            document.getElementById("popup-form").style.display = "block";
        });
    });

    // Close the popup
    document.getElementById("close-popup").addEventListener("click", function() {
        document.getElementById("popup-form").style.display = "none";
    });
});
document.getElementById("popup-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const userId = document.getElementById('row-id').value;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const role = document.getElementById('role').value;

    // Check if all fields are filled
    if (!name || !email || !role) {
        alert('All fields are required.');
        return;
    }

    // Send the update request to the server
    fetch(`/users/${userId}`, {
        method: 'PUT',
        headers: {

            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token for security
        },
        body: JSON.stringify({ name, email }) // JSON body containing the updated user info
    })
    .then(response => response.json())  // Parse the JSON response
    .then(data => {
        // Check if the update was successful
        if (data.success) {
            alert('User updated successfully!');
            document.getElementById("popup-form").style.display = "none"; // Close the popup
        } else {
            alert('Failed to update user: ' + data.message); // Show an error message if the update failed
        }
    })
    .catch(error => {
        console.error('Error:', error); // Log the error to the console
        alert('An error occurred. Please try again later.'); // Show a generic error message
    });
});

// Event listener for the popup form submission
document.getElementById("popup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get values from the form fields
    const userId = document.getElementById('row-id').value;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
   

    // Basic validation to ensure all fields are filled
    if (!name || !email ) {
        alert('All fields are required.');
        return;
    }

    // Send the updated data to the server using a PUT request
    fetch(`/users/${userId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ name, email }) // Sending updated data as JSON
    })
    .then(response => response.json())  // Parse the JSON response
    .then(data => {
        if (data.success) {
            alert('User updated successfully!');
            document.getElementById("popup-form").style.display = "none"; // Close the form
            location.reload(); // Reload the page to show the updated data
        } else {
            alert('Failed to update user: ' + data.message); // Show an error message
        }
    })
    .catch(error => {
        console.error('Error:', error); // Log the error to the console
        alert('An error occurred. Please try again later.'); // Show a generic error message
    });
});

// Close the popup when the close button is clicked
document.getElementById("close-popup").addEventListener("click", function() {
    document.getElementById("popup-form").style.display = "none";
});
