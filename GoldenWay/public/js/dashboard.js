

function toggleMenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
}

// Show user list when the "user List" submenu item is clicked
document.getElementById('userListMenu').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    const userList = document.getElementById('userList');
    const driverList = document.getElementById('driverList');
    const operationsOfficer= document.getElementById('operationsOfficerList');
    const ticketOfficer= document.getElementById('ticketOfficerList');

    // Toggle user list and hide driver list
    userList.style.display = 'block';
    driverList.style.display = 'none';
    ticketOfficer.style.display= 'none';
    operationsOfficer.style.display= 'none';
});

// Show driver list when the "driver List" submenu item is clicked
document.getElementById('driverListMenu').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    const driverList = document.getElementById('driverList');
    const userList = document.getElementById('userList');
    const operationsOfficer= document.getElementById('operationsOfficerList');
    const ticketOfficer= document.getElementById('ticketOfficerList');

    // Toggle driver list and hide user list
    driverList.style.display = 'block';
    userList.style.display = 'none';
    ticketOfficer.style.display= 'none';
    operationsOfficer.style.display= 'none';
});

document.getElementById('operationOfficerListMenu').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    const driverList = document.getElementById('driverList');
    const userList = document.getElementById('userList');
    const operationsOfficer= document.getElementById('operationsOfficerList');
    const ticketOfficer= document.getElementById('ticketOfficerList');

    // Toggle driver list and hide user list
    operationsOfficer.style.display= 'block';
    ticketOfficer.style.display= 'none';
    driverList.style.display = 'none';
    userList.style.display = 'none';
});

document.getElementById('ticketOfficerListMenu').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    const driverList = document.getElementById('driverList');
    const userList = document.getElementById('userList');
    const operationsOfficer= document.getElementById('operationsOfficerList');
    const ticketOfficer= document.getElementById('ticketOfficerList');

    // Toggle driver list and hide user list
    ticketOfficer.style.display= 'block';
    operationsOfficer.style.display= 'none';
    driverList.style.display = 'none';
    userList.style.display = 'none';
});
// Update margin-left of the content section based on the sidebar toggle
document.getElementById('check').addEventListener('change', function() {
    const userList = document.getElementById('userList');
    if (this.checked) {
        userList.style.marginLeft = '250px'; // Shift the table right when sidebar is open
    } else {
        userList.style.marginLeft = '0'; // Reset margin when sidebar is closed
    }
});