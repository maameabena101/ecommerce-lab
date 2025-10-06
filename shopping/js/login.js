document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("loginForm");
  const message = document.getElementById("message");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      if (data.trim() === "success") {
        window.location.href = "../index.php"; // Redirect after login
      } else {
        message.textContent = data;
      }
    })
    .catch(() => {
      message.textContent = "An error occurred. Try again.";
    });
  });
});
