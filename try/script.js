// script.js

function getStoredUsers() {
    const users = localStorage.getItem("users");
    return users ? JSON.parse(users) : [];
}

function saveUsers(users) {
    localStorage.setItem("users", JSON.stringify(users));
}

document.getElementById("registration-form")?.addEventListener("submit", (e) => {
    e.preventDefault();
    const username = document.getElementById("reg-username").value;
    const password = document.getElementById("reg-password").value;

    let users = getStoredUsers();

    if (users.some(user => user.username === username)) {
        alert("Username already exists!");
        return;
    }

    users.push({ username, password });
    saveUsers(users);
    alert("Registration successful! Redirecting to login...");
    window.location.href = "login_form.html";
});

document.getElementById("login-form")?.addEventListener("submit", (e) => {
    e.preventDefault();
    const username = document.getElementById("login-username").value;
    const password = document.getElementById("login-password").value;

    let users = getStoredUsers();

    const user = users.find(user => user.username === username && user.password === password);
    if (user) {
        alert("Login successful!");
    } else {
        alert("Invalid username or password!");
    }
});
