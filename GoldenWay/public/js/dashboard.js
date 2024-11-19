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

// Show user list when the "User List" submenu item is clicked
document.getElementById('userListMenu').addEventListener('click', function(event) {
    event.preventDefault();
    showList('userList');
});

// Show driver list when the "Driver List" submenu item is clicked
document.getElementById('driverListMenu').addEventListener('click', function(event) {
    event.preventDefault();
    showList('driverList');
});

// Show operations officer list
document.getElementById('operationsOfficerListMenu').addEventListener('click', function(event) {
    event.preventDefault();
    showList('operationsOfficerList');
});

// Show ticket officer list
document.getElementById('ticketOfficerListMenu').addEventListener('click', function(event) {
    event.preventDefault();
    showList('ticketOfficerList');
});

// Update margin-left of the content section based on the sidebar toggle
document.getElementById('check').addEventListener('change', function() {
    const content = document.querySelector('.content');
    content.style.marginLeft = this.checked ? '250px' : '0';
});

// Handle edit icon click
document.querySelectorAll('.edit-icon').forEach(button => {
    button.addEventListener('click', function() {
        const row = this.closest('tr');
        const id = row.getAttribute('data-id');
        const name = row.cells[1].innerText;
        const email = row.cells[2].innerText;
        const role = row.cells[3].innerText;

        // Populate the form fields
        document.getElementById('row-id').value = id;
        document.getElementById('name').value = name;
        document.getElementById('email').value = email;
        document.getElementById('role').value = role;

        // Show the popup form
        document.getElementById('popup-form').style.display = 'block';
    });
});

// Close the popup
document.getElementById('close-popup').addEventListener('click', function() {
    document.getElementById('popup-form').style.display = 'none';
});

// Handle form submission
document.getElementById('update-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const id = document.getElementById('row-id').value;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const role = document.getElementById('role').value;

    // Send the updated data to the server
    fetch(`/items/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ name, email, role }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const row = document.querySelector(`tr[data-id="${id}"]`);
            row.cells[1].innerText = data.name;
            row.cells[2].innerText = data.email;
            row.cells[3].innerText = data.role;

            document.getElementById('popup-form').style.display = 'none';
        } else {
            alert('Update failed: ' + data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});