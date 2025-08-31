<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="POST" action="<?= url('get-the-data')?>">
    <label>URL <input type="text" name="UrlBox"> </label><br>
    <input type="hidden" name ="_token" value ="<?= csrf_token()?>" />
    <input type="submit" value="Send">
</form>
</body>
</html>
