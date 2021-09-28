<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Form</title>
</head>
<main>
<p></p>
<body>
    <div class="container">
        <form class="row g-3">
            <div class="row">
                <div class="col">
                    <label for="firstname" class="form-label"> First Name </label>
                    <input type="text" name="first_name" class="form-control" id="firstname" aria-label="First name">
                </div>
                <div class="col">
                    <label for="lastname" class="form-label"> Last Name </label>
                    <input type="text" name="last_name" class="form-control" id="lastname" aria-label="Last name">
                </div>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" name="state" class="form-select">
                    <option selected>Michigan</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip">
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col">
                        <input class="form-check-input" type="radio" name="genderOptions" id="male" value="option1">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" name="genderOptions" id="female" value="option2">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>
</main>
</html>