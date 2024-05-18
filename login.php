
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .result { margin-top: 10px; }
    </style>
</head>
<body>
<div class="container ">

<div class="row">
<form id="main-form" action="add.php" method="post">
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" id="name" placeholder="enter name">
</div>

<div id="amount-fields" style="display:none;">
    <div class="form-group">
        <label>X Amount</label>
        <input type="number" name="x_amount" id="x_amount" placeholder="enter x amount">
    </div>
    <div class="form-group">
        <label>Y Amount</label>
        <input type="number" name="y_amount" id="y_amount" placeholder="enter y amount">
    </div>
    <div class="form-group">
        <label>Z Amount</label>
        <input type="number" name="z_amount" id="z_amount" placeholder="enter z amount">
    </div>

    <div class="button-group">
        <input type="button" id="button-a" value="A">
        <input type="button" id="button-b" value="B">
        <input type="button" id="button-c" value="C">
        <input type="button" id="button-d" value="D">
        <input type="button" id="button-e" value="E">
    </div>
</div>

<div id="result" class="result"></div>

<input type="button" id="add-button" value="Add">
<input type="submit" id="submit-button" name="submit" value="Submit" style="display:none;">
</form>
</div>
</div>
<script>
document.getElementById('add-button').addEventListener('click', function() {
    var nameField = document.getElementById('name').value;
    if (nameField.trim() !== "") {
        document.getElementById('amount-fields').style.display = 'block';
        this.style.display = 'none'; // Hide the Add button
        document.getElementById('submit-button').style.display = 'block'; // Show the Submit button
    } else {
        alert("Please enter a name.");
    }
});

function calculateResult(operation) {
    var x = parseFloat(document.getElementById('x_amount').value) || 0;
    var y = parseFloat(document.getElementById('y_amount').value) || 0;
    var z = parseFloat(document.getElementById('z_amount').value) || 0;
    var result;

    switch (operation) {
        case 'A':
            result = x + y + z;
            break;
        case 'B':
            result = (x + y) - z;
            break;
        case 'C':
            result = x - y - z;
            break;
        case 'D':
            result = x * y * z;
            break;
        case 'E':
            result = (x + y + z) / 3;
            break;
        default:
            result = 0;
            break;
    }

    document.getElementById('result').innerText = 'Result: ' + result;
}

document.getElementById('button-a').addEventListener('click', function() { calculateResult('A'); });
document.getElementById('button-b').addEventListener('click', function() { calculateResult('B'); });
document.getElementById('button-c').addEventListener('click', function() { calculateResult('C'); });
document.getElementById('button-d').addEventListener('click', function() { calculateResult('D'); });
document.getElementById('button-e').addEventListener('click', function() { calculateResult('E'); });

</script>
</body>
</html>
