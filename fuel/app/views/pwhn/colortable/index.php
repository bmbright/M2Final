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
        <p>
            <button id="addColor" onclick="randomColor()"> Add Color </button>
        </p>
        
        <input type="submit">
        <div id="selectedColors"></div>
    </form>
</body>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    const arrayOfColorFunctions = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
    var arrayHexs = [];

    function randomColor(){
        let randomColorString = '#';
        var  justHex = '';
        for (let i = 0; i < 6; i++){

            let index = Math.floor(Math.random() * 16);
            let value = arrayOfColorFunctions[index];

            randomColorString += value;
            justHex += value;
        }
        var hexExists = false;
                if(arrayHexs != null){
                    for (let i = 0; i < arrayHexs.length; i++) {
                        if (arrayHexs[i] == randomColorString) {
                            hexExists = true;
                        }
                        
                    }
                }
                if (!hexExists) {
                    arrayHexs.push(randomColorString);
                    console.log(justHex);
                    console.log(randomColorString);
                    document.getElementById("selectedColors").innerHTML += '<p>'+'<input type="color" id="' +justHex+ '" name="' + justHex +'" value="'+ randomColorString + '">' + '<label for="'+justHex+'">'+randomColorString+'</label>'+'</p>';
                }

    }

</script>

<footer>
    <hr>
    <p>&copy; Pets with Human Names, 2023</p>
    <p>Colorado State University - CS312</p>
    <hr>
</footer>

</html>