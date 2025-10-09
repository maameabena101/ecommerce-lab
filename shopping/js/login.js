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
    .then(response => response.text) //won't need
    .then(data => {
      if (data.trim() === "success") { //if data.success
        window.location.href = "../index.php"; // Redirect after login
        //
      } else {
        message.textContent = data; //message.textContent = data.message
      }
    })
    .catch(() => {
      message.textContent = "An error occurred. Try again.";
    });
  });
});
