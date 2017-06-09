<fieldset>
    <legend>Naar database <i class="fa fa-caret-down" aria-hidden="true"></i></legend>
    <div class='form-group form-inline togglecontent'>
        <label for="begin">Begin</label>
        &nbsp &nbsp
        <div class='input-group'>
            <input class='form-control' type="number" id="begin" name="begin" min="1" max="52" step="1"
                   required>
        </div>
        &nbsp &nbsp
        <label for="eind">Eind</label>
        &nbsp &nbsp
        <div class='input-group'>
            <input class='form-control' type="number" id="eind" name="eind" min="1" max="52" step="1"
                   required>
        </div>
        &nbsp &nbsp
        <label for="jaar">Jaar</label>
        &nbsp &nbsp
        <div class='input-group'>
            <input class='form-control' type="number" id="jaar" name="jaar" min="2000" max="3000"
                   step="1"
                   value="2017" required>
        </div>
        <br><br>
        <input class='btn btn-info' type='submit' id='send2db' name='send2db' value="Naar database">
    </div>
</fieldset>