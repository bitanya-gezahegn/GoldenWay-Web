function toggleMenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
}

// Show user list when the "user List" submenu item is clicked
document.getElementById('userListMenu').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    const userList = document.getElementById('userList');
    userList.style.display = userList.style.display === 'block' ? 'none' : 'block';
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
