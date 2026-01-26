<html>
    <head>
        <title>Form Handling</title>
    </head>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            margin: 25px;
        }
    </style>

    <body>
        <form action="response.php" method="GET">
            <label>First Name</label>
            <input type="text" name="firstname" value="">
            <br>
            <label>Last Name</label>
            <input type="text" name="lastname" value="">
            <br>
            <label>Gender</label>
            <br>
            <input type="radio" name="gender" value="Male">
            <label for="male">Male</label>
            <br>
            <input type="radio" name="gender" value="Female">
            <label for="female">Female</label>
            <br>
            <label for="country">Country: </label>
            <select id="country" name="country" value="">
                <option value="Philippines">Philippines</option>
                <option value="United States">United States</option>
                <option value="China">China</option>
            </select>
            <br>
            <label>Favorite color</label>
            <br>
            <input type="checkbox" name="color[]" value="Red">
            <label>Red</label>
            <input type="checkbox" name="color[]" value="Orange">
            <label>Orange</label>
            <input type="checkbox" name="color[]" value="Yellow">
            <label>Yellow</label>
            <input type="checkbox" name="color[]" value="Green">
            <label>Green</label>
            <br>
            <input type="checkbox" name="color[]" value="Blue">
            <label>Blue</label>
            <input type="checkbox" name="color[]" value="Indigo">
            <label>Indigo</label>
            <input type="checkbox" name="color[]" value="Violet">
            <label>Violet</label>
            <br>
            <input type="submit" name="Submit" value="SEND">
        </form>
    </body>
</html>