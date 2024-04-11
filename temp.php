<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Friend Button</title>
</head>
<body>

<button id="addFriendButton" onclick="toggleButton()">Add Friend</button>

<script>
// Check if the button state is stored in local storage
const storedState = localStorage.getItem('friendButtonState');

// If it's stored, use that value to set the initial state
if (storedState === 'cecsel') {
    document.getElementById('addFriendButton').innerText = 'Cecsel';
}

// Function to toggle the button state
function toggleButton() {
    const button = document.getElementById('addFriendButton');
    if (button.innerText === 'Add Friend') {
        button.innerText = 'Cecsel';
        // Store the state in local storage
        localStorage.setItem('friendButtonState', 'cecsel');
    } else {
        button.innerText = 'Add Friend';
        // Remove the state from local storage
        localStorage.removeItem('friendButtonState');
    }
}
</script>

</body>
</html>
