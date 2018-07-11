<h1>Product List</h1>

<div class="container">
    <form align="right" method="post" action="<?php echo URL; ?>productList/massDelete/">
        <select name="option" id="select_option">
            <option disabled selected>Select Option</option>
            <option value="delete">Mass Delete</option>
            <option value="extra">Test Option</option>
        </select>

        <div class="option-form">
            <div class="option_block" id="delete" style="display: none;">
                <label>Delete</label><input type="number" name="delete"><br>
            </div>
            <div class="option_block" id="extra" style="display: none;">
                <label>Extra</label><input type="number" name="extra"><br>
            </div>
        </div>

        <input type="submit" name="submit">

    </form>
</div>

<div class='container'>
    <div class='grid-container'>
        <?php foreach ($this->productList as $key => $value) {

    echo "<div class='grid-item' style='height:fill;'>";
    echo "<div class='chk-item'><input type='checkbox' name='checkbox[]' value='".$value['type']."'></div>";

    echo "<p>" . $value['sku'] . "</p>";
    echo "<p>" . $value['name'] . "</p>";
    echo "<p>" . $value['price'] . "</p>";
    if ($value['type'] == 'disc') {
        echo "<p>" . $value['size'] . " MB</p>";
    }
    if ($value['type'] == 'book') {
        echo "<p>" . $value['weight'] . " KG</p>";
    }
    if ($value['type'] == 'furniture') {
        echo "<p>" . $value['height'];
        echo "x" . $value['width'];
        echo "x" . $value['height'] . "</p>";
    }
    if($value['img'] != null){
        echo "<img src='".$value['img']."' alt='".$value['name']."'>";
    }
    echo "</div>";

} ?>
    </div>
</div>