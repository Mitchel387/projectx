<!doctype html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krantenwijk</title>
</head>
<body>

<h1>Krantenwijk</h1>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <legend>Settings</legend>
        <label for="start">Vanaf week:</label>
        <input name="start" type="number" min="1" max="52" title="start">
        <label for="weken">Vul het aantal weken in</label>
        <input type="number" min="0" name="weken" title="weken">
        <input type="submit" value="Submit" name="submit">
    </fieldset>

    <fieldset style="display: none;" id="show1">
        <legend>Input</legend>
        <?php

        if (isset($_POST['submit'])) {
            $weken = $_POST['weken'] - 1;
            $start = $_POST['start'];
            $eind = $start + $weken;
            $i = $start;
            $show = 1;

            //generate input fields voor aantal weken
            for ($i = $start; $i < $eind + 1; $i++) {
                if ($i == 53) {
                    $weken = $weken - 52;   //van week 52 naar 1
                    $i = 0;                 //week 1 ($i + 1 bij for loop
                    $eind = $eind - 52;     // voorkomt infinity loop vanaf 52
                }
                else {
                    echo "<h2>Week " . $i . "</h2>\n";
                    echo "<label for=" . $i .">Bedrag</label>\n";
                    echo "<input type=\"number\" step=\"0.01\" name=\"money\" onblur=\"findTotal()\" placeholder=\"0.00\" id=" . $i . "\">\n";
                }
            }
        }
        ?>
        <br>
        <br>
        <button type="submit" onsubmit="som()">Bereken</button>

    </fieldset>
    <fieldset style="display: none;" id="show2">
        <legend>Resultaat</legend>
        <input type="number" step="0.01" placeholder="0.00" id="total">
    </fieldset>
</form>


<script type="text/javascript">
    // display after filling user setting in
    //    var som = document.getElementById("som").name;
    //    function show() {
    document.getElementById("show1").style.display = "";
    document.getElementById("show2").style.display = "";
    //    }
//    document.body.appendChild(form);

    // with onsubmit and function(s)

    /*function som(){
        var arr = document.getElementsByName('money');
        var tot = 0;
        for(var i=1; i < arr.length; i++){
            if(parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
        document.getElementById('total').value = tot;
        console.log(tot);
    }*/

    function findTotal() {
        var arr = document.getElementsByName('money');
        var tot = 0;
        for (var i = 0; i < arr.length; i++) {
            if (parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
            console.log(arr[i].value);

        }
        document.getElementById('total').value = tot.toFixed(2);
    }



</script>

</body>
</html>


<!--var inhoud = document.getElementById(select).value;
var totaal =+ select;
console.log(inhoud);
console.log(totaal);
document.write(totaal);-->