document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("registerForm");
  const message = document.getElementById("message");

  form.addEventListener("submit", async function (event) {
    event.preventDefault(); // prevent page reload

    // Collect form data
    const formData = new FormData(form);

    // Regex validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^[0-9]{7,15}$/;

    const email = formData.get("email");
    const password = formData.get("password");
    const contact = formData.get("contact");

    // Validation checks
    if (!emailRegex.test(email)) {
      message.textContent = "Please enter a valid email address.";
      message.style.color = "red";
      return;
    }
    if (password.length < 6) {
      message.textContent = "Password must be at least 6 characters.";
      message.style.color = "red";
      return;
    }
    if (!phoneRegex.test(contact)) {
      message.textContent = "Enter a valid contact number (7–15 digits).";
      message.style.color = "red";
      return;
    }

    // Optional loading message
    message.textContent = "Registering...";
    message.style.color = "blue";

    try {
      const response = await fetch("../actions/register_customer_action.php", {
        method: "POST",
        body: formData
      });

      const text = await response.text();
      message.textContent = text.includes("success")
        ? "Registration successful! Redirecting..."
        : text;
      message.style.color = text.includes("success") ? "green" : "red";

      if (text.includes("success")) {
        setTimeout(() => {
          window.location.href = "login.php";
        }, 2000);
      }
    } catch (error) {
      console.error(error);
      message.textContent = "Error submitting form.";
      message.style.color = "red";
    }
  });
});
