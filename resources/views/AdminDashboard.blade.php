<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Dashboard</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header, nav, main {
    padding: 20px;
}

nav ul {
    list-style: none;
    display: flex;
}

nav li {
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: blue;
}

#editable-content {
    border: 1px solid #ddd;
    padding: 10px;
    margin-top: 10px;
}</style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#" id="dashboard">Dashboard</a></li>
            <li><a href="#" id="content">Content Management</a></li>
        </ul>
    </nav>
    <main>
        <div id="dashboard-section">
            <h2>Welcome to the Dashboard</h2>
            <!-- Dashboard content goes here -->
        </div>
        <div id="content-section">
            <h2>Content Management</h2>
            <button id="edit-button">Edit Content</button>
            <div id="editable-content">
                <p>This is the default content.</p>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const dashboardSection = document.getElementById("dashboard-section");
    const contentSection = document.getElementById("content-section");
    const editButton = document.getElementById("edit-button");
    const editableContent = document.getElementById("editable-content");

    // Initial state
    dashboardSection.style.display = "block";
    contentSection.style.display = "none";

    // Navigation event listeners
    document.getElementById("dashboard").addEventListener("click", function() {
        dashboardSection.style.display = "block";
        contentSection.style.display = "none";
    });

    document.getElementById("content").addEventListener("click", function() {
        dashboardSection.style.display = "none";
        contentSection.style.display = "block";
    });

    // Edit button event listener
    editButton.addEventListener("click", function() {
        const newContent = prompt("Edit the content:", editableContent.innerText);
        if (newContent !== null) {
            editableContent.innerHTML = "<p>" + newContent + "</p>";
        }
    });
});
</script>
</html>
