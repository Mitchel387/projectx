<?php
//input fieldset
function inputWeken()
{
    $weken = $_POST['weken'] - 1;
    $start = $_POST['start'];
    $eind = $start + $weken;

//    if ()
    ?>
    <div class='form-group form-inline'>
        <fieldset>
            <legend class="input">Input<i class="fa fa-caret-down" aria-hidden="true"></i></legend>
            <div id="input" class="togglecontent">

            <form class='form-inline'>

                <?php
                //generate input fields voor aantal weken
                for ($i = $start; $i < $eind + 1; $i++) {
                    if ($i == 53) {
                        $weken = $weken - 52;   //van week 52 naar 1
                        $i = 0;                 //week 1 ($i + 1 bij for loop
                        $eind = $eind - 52;     // voorkomt infinity loop vanaf 52
                    } else {
                        ?>
                        <h2>Week <?php echo $i; ?></h2>
                        <label>Bedrag</label>
                        <div class='input-group'>
                            <div class='input-group-addon'>€</div>
                            <input class='form-control' type="number" step="0.01" min='0' name="money"
                                   onblur="findTotal()" onkeyup="findTotal()"
                                   onchange="findTotal()" onpaste="findTotal()" placeholder="0.00"
                                   id="<?php echo $i; ?>">
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        <input class='btn btn-danger togglecontent' type="reset" value="Reset" name="reset" onmouseleave="findTotal()">
        <a class="btn btn-success togglecontent" role="button" href="" onclick="">Opnieuw</a>
        </fieldset>

    </div>
    <?php
}

function noInput()
{
    // als er geen totaal bedrag is ingevuld
    echo "<br>Er is geen totaal bedrag!";
    echo "<br>Niks opgeslagen in database";
    var_dump($_POST['total']);
}