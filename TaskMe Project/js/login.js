if('submit') {
    mysqli_query($mysqli, "INSERT INTO login (username, password, email) values ('$username', '$password', '$email')");
}
