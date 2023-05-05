<!DOCTYPE html>
<html lang="en">

<div class="page-header">
    <header>
        <hr>
        <h2>Color Table</h2>
        <hr>
    </header>
</div>

<body>

    <form action="../table/colorTable.php" method="GET">
        <p>
            <label for="rows">Enter number of Rows/Columns:</label>
            <input type="number" name="rows" id="rows" min=1 max=26 required>
        </p>
        <p>
            <label for="colors">Number of Colors:</label>
            <input type="number" name="colors" id="colors" min=1 max=10 required>
        </p>
        <input type="submit">
    </form>

</body>

<footer>
    <hr>
    <p>&copy; Pets with Human Names, 2023</p>
    <p>Colorado State University - CS312</p>
    <hr>
</footer>

</html>