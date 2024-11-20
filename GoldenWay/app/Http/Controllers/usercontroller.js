app.put('/users/:id', (req, res) => {
    const id = req.params.id;
    const { name, email, role } = req.body;

    // Logic to update the user in the database
    User.findByIdAndUpdate(id, { name, email, role }, { new: true })
        .then(updatedUser => {
            if (updatedUser) {
                res.json({ success: true, message: 'User updated successfully.' });
            } else {
                res.json({ success: false, message: 'User not found.' });
            }
        })
        .catch(error => {
            console.error('Update error:', error);
            res.status(500).json({ success: false, message: 'Error updating user.' });
        });
});