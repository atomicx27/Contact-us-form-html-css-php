<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
      .container {
        width: 60%;
        margin: 0 auto;
        text-align: center;
        background-color: #E0FFFF;
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 30px 0;
      }

      label,
      input,
      textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        box-sizing: border-box;
      }

      input[type="submit"] {
        width: 200px;
        background-color: lightblue;
        color: white;
        font-size: 16px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      @media only screen and (max-width: 600px) {
        .container {
          width: 90%;
        }
        input[type="submit"] {
          width: 100%;
        }
      }
      body {
  background-image: url("C:\Users\pashi\OneDrive\Desktop\contact us\page_img.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}
    </style>
  </head>
  <body>
    <div class="container">
      <h1 style="color: #0082e6;">Contact Us</h1>
      <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
    <script>
       const form = document.getElementById("contact-form");

form.addEventListener("submit", function(event) {
  event.preventDefault();
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  if (name === "" || email === "" || message === "") {
    alert("Please fill out all the fields.");
    return;
  }

  alert(`Thank you ${name}! Your message has been sent.`);
  form.reset();
});
    </script>
  </body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $file = fopen("form-data.txt", "a");
    fwrite($file, "$name, $email, $message\n");
    fclose($file);
  }
?>
