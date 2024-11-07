# Code Citations

## License: unknown

https://github.com/TheGreatDombino/CretnQ/tree/ba1a66397ef6c38b7e0a3508d943c01fa611c4ef/scripts/php/login.inc.php

```
account exists in the database
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password
```

## License: unknown

https://github.com/LNT2/role/tree/58e1c67822210e4de5d561cdfd8625ab14d132ec/role/login/authenticate.php

```
stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        if (password_verify($_POST['password'], $password)
```

## License: unknown

https://github.com/sandhuanan/projectgeorgian/tree/65f0696f651157c47fb551c7eb48504e5238a0d3/login4auth.php

```
store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        if (password_verify($_POST['
```

## License: unknown

https://github.com/sandhuanan/projectgeorgian/tree/65f0696f651157c47fb551c7eb48504e5238a0d3/loginauth.php

```
if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        if (password_verify($_POST['password'],
```

## License: unknown

https://github.com/Isz11/yikyak/tree/fddf9c6a763219a872da31962cbbd5ba6786be0c/login.php

```
= $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: index.php');
        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
        }
    } else {
        //
```
