//berekening alles optellen
function findTotal() {
    var arr = document.getElementsByName('money');
    var tot = 0;
    for (var i = 0; i < arr.length; i++) {
        if (parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
        console.log(arr[i].value);

    }
    document.getElementById('total').value = tot.toFixed(2);
    document.getElementById('name1').value = (tot / 2).toFixed(2);
    document.getElementById('name2').value = (tot / 2).toFixed(2);
}