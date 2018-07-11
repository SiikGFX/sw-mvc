<h1>Product Add</h1>

<div class="container">
    <form action="<?php echo URL; ?>productList/create" method="post">
        <label>SKU</label><input type="text" name="sku"><br>
        <label>Name</label><input type="text" name="name"><br>
        <label>Price</label><input type="number" step="any" name="price"><br>

        <label>Type</label>
        <select name="type" id="select_type">
            <option disabled selected>Select Type</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select><br>

        <div class="second-form">
            <div class="type_block" id="disc">
                <label>Size</label><input type="number" name="size"><br>
                <p class="desc"><span>Please provide disc size in MB, when type <b>Disc</b> is selected!</span></p>
            </div>
            <div class="type_block" id="book">
                <label>Weight</label><input type="number" name="weight"><br>
                <p class="desc"><span>Please provide book weight in KG, when type <b>Book</b> is selected!</span></p>
            </div>
            <div class="type_block" id="furniture">
                <label>Height</label><input type="number" name="height"><br>
                <label>Width</label><input type="number" name="width"><br>
                <label>Length</label><input type="number" name="length"><br>
                <p class="desc"><span>Please provide dimensions in HxWxL format, when type <b>Furniture</b> is selected!</span>
                </p>
            </div>
        </div>

        <label>Image</label><input type="text" name="img"><br>
        <label>&nbsp;</label><input type="submit">
    </form>
</div>

<div class="container">
    <h2 align="center">Quick Product Preview</h2>
    <hr>
    <table align="center">
        <thead>
            <td>ID</td>
            <td>SKU</td>
            <td>Name</td>
            <td>Price</td>
            <td>Type</td>
            <td>Size</td>
            <td>Weight</td>
            <td>Height</td>
            <td>Width</td>
            <td>Length</td>
            <td>Image</td>
            <td style="background-color: #ffff66">Edit</td>
            <td style="background-color: #dd5656">Delete</td>
        </thead>
        <tbody>
            <?php

            foreach ($this->productList as $key => $value) {
                echo "<tr>";
                echo '<td>' . $value['id'] . '</td>';
                echo '<td>' . $value['sku'] . '</td>';
                echo '<td>' . $value['name'] . '</td>';
                echo '<td>' . $value['price'] . '</td>';
                echo '<td>' . $value['type'] . '</td>';
                echo '<td>' . $value['size'] . '</td>';
                echo '<td>' . $value['weight'] . '</td>';
                echo '<td>' . $value['height'] . '</td>';
                echo '<td>' . $value['width'] . '</td>';
                echo '<td>' . $value['length'] . '</td>';
                echo '<td>' . $value['img'] . '</td>';
                echo '<td><a href="' . URL . 'productList/edit/' . $value['id'] . '">Edit</a></td>';
                echo '<td><a href="' . URL . 'productList/delete/' . $value['id'] . '">Delete</a></td>';
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
