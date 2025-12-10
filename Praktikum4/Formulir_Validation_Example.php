<!DOCTYPE HTML>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Validation Example</title>

    <style>
        .error { color: red; }
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

<form action="Koneksi1.php" method="post">

    Name:
    <input type="text" name="name">
    <span class="error"> *</span>
    <br><br>

    E-mail:
    <input type="text" name="email">
    <span class="error"> *</span>
    <br><br>

    Website:
    <input type="text" name="website">
    <br><br>

    Comment:
    <br>
    <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Other"> Other
    <span class="error"> *</span>
    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
