<h1>Form</h1>

<p>
    The class Form loads the data from the variable $_POST and the stored data. <br>
    This allows data to be stored over several page calls. <br>
    Enter something in the first field and send it.
</p>


<form action="<?= $this->getLink('form') ?>" method="POST">
    <label for="input1">Input 1 </label>
    <input type="text" name="input1" value="<?= (isset($input['input1']) ? $input['input1'] : '') ?>">
    <br>
    <label for="input2">Input 2 </label>
    <input type="text" name="input2" value="<?= (isset($input['input2']) ? $input['input2'] : '') ?>">
    <br>
    <label for="input3">Input 2 </label>
    <input type="text" name="input3" value="<?= (isset($input['input3']) ? $input['input3'] : '') ?>">
    <br>
    <button type="submit">send</button>
</form>