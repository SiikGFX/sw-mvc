<h1>Product: Edit</h1>

<form method="post" action="<?php echo URL; ?>productList/editSave/<?php echo $this->product['id']; ?>">
    <label>SKU</label><input type="text" name="sku" value="<?php echo $this->product['sku'] ?>" required><br>
    <label>Name</label><input type="text" name="name" value="<?php echo $this->product['name'] ?>" required><br>
    <label>Price</label><input type="number" step="any" name="price" value="<?php echo $this->product['price'] ?>" required><br>

    <label>Type</label>
    <select id="select_type" name="type" required>
        <option disabled selected>Select Type</option>
        <option value="disc" <?php if ($this->product['type'] == 'disc'): echo 'selected'; endif; ?>>Disc</option>
        <option value="book" <?php if ($this->product['type'] == 'book'): echo 'selected'; endif; ?>>Book</option>
        <option value="furniture" <?php if ($this->product['type'] == 'furniture'): echo 'selected'; endif; ?>>Furniture
        </option>
    </select><br>
    <div class="second-form">
        <div id="disc" <?php if ($this->product['type'] == 'book' || $this->product['type'] == 'furniture'): echo 'style="display: none"'; endif; ?>>
            <label>Size</label><input type="number" name="size" value="<?php echo $this->product['size'] ?>"><br>
        </div>
        <div id="book" <?php if ($this->product['type'] == 'disc' || $this->product['type'] == 'furniture'): echo 'style="display: none"'; endif; ?>>
            <label>Weight</label><input type="number" name="weight" value="<?php echo $this->product['weight'] ?>"><br>
        </div>
        <div id="furniture" <?php if ($this->product['type'] == 'disc' || $this->product['type'] == 'book'): echo 'style="display: none"'; endif; ?>>
            <label>Height</label><input type="number" name="height" value="<?php echo $this->product['height'] ?>"><br>
            <label>Width</label><input type="number" name="width" value="<?php echo $this->product['width'] ?>"><br>
            <label>Length</label><input type="number" name="length" value="<?php echo $this->product['length'] ?>"><br>
        </div>
    </div>
    <label>&nbsp;</label><input type="submit">
</form>