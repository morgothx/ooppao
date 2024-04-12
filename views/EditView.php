<?php

class EditView
{
    private $edit;

    public function editInformation()
    {
        $this->edit = '<form action="index.php" method="post">
        <label for="marca">
           Can you edit your text
        </label>
        <input type="text" name="marca" value="THIS TEXT CAN BE EDITABLE">
        <label for="color">
        
    </form>';

        return $this->edit;
    }
}