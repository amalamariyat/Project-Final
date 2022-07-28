<!DOCTYPE html>
<html>
  
<head>
  <title>Send Mail</title>
  <script src=
    "https://smtpjs.com/v3/smtp.js">
  </script>

  <script type="text/javascript">
    
      Email.send({
        Host: "smtp.gmail.com",
        //dummy mail
        Username: "mastermashm@gmail.com",
        //dummy pass
        Password: "Mash@1234m",

        To: 'amalamariyat57@gmail.com',
        From: "info@gmail.com",
        Subject: "Email Verification",
        Body: "You have been recently logged in into candream.",
      })
        .then(function (message) {
          alert("a verification Email has been sent to your email id")
        });
    
  </script>
</head>
  

  
</html>