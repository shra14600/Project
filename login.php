<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
<form id="login" class="input-group" action="login_verification.php" method="post">
        <input type="text" class="input-field" placeholder="email address" required="required" name="email_id"/>
        <input type="password" class="input-field" placeholder="Password" name="password" required="required"/>
        <input type="checkbox" class="check-box" />Remember Password
        <input type="submit" value="Login" id="btnSubmit" class="submit-btn"/>
      </form>
</body>
</html>