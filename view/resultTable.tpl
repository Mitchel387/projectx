{*display none bij settings fieldset*}
<script>
    document.getElementById("settings").style.display = "none";
</script>

<div class='form-group'></div>
<fieldset>
<legend>Resultaat <i class="fa fa-caret-down" aria-hidden="true"></i></legend>

    <div class="panel panel-default togglecontent">
        <table class='table table-bordered form-inline'>
            <thead>
            <tr>
                <th>Naam</th>
                <th>Bedrag</th>
            </tr>
            </thead>
            <tr>
                <td>Melvin</td>
                <td>
                    <input class='form-control' type="number" step="0.01" placeholder="0.00" id="name1"
                           name="name1" readonly>
                </td>
            </tr>
            <tr>
                <td>Bart</td>
                <td><input class='form-control' type="number" step="0.01" placeholder="0.00" id="name2"
                           name="name2" readonly></td>
            </tr>
            <tr>
                <td>Totaal</td>
                <td><input class='form-control' type="number" step="0.01" placeholder="0.00" id="total"
                           name="total" readonly required></td>
            </tr>
        </table>

    </div>

</fieldset>