<!Doctype html>
<html>
    <body>

        <p id="warn">
            Please Select an Unused Color
        </p>
        <table id = "colorPickerTable">
            <?php for ($index = 1; $index <= $_GET["colors"]; $index++) : ?> 
                <tr>
                    <td class = "col1">
                        <select id="<?php echo $index?>" name="color" onchange="DropdownValidation(id)" onclick="previousColor(id)">
                            <option id="">Select Color...</option>
                            <option id="Red">Red</option>
                            <option id="Orange">Orange</option>
                            <option id="Yellow">Yellow</option>
                            <option id="Green">Green</option>
                            <option id="Blue">Blue</option>
                            <option id="Purple">Purple</option>
                            <option id="Grey">Grey</option>
                            <option id="Brown">Brown</option>
                            <option id="Black">Black</option>
                            <option id="Teal">Teal</option>
                        </select>
                        <input type="radio" name="color_radio" id="" onclick="selectRadio()">
                    </td>
                    <td class = "col2">
                        <p id = "colorPalette<?php echo $index?>"></p>
                    </td>
                </tr>
            <?php endfor?>
        </table>
            
        <script type= "text/javascript">
            let previousColorValue;
            function previousColor(ID){
                var oneDropdown = document.getElementById(ID);
                previousDropdownId = ID;
                previousColorValue = oneDropdown.value;
            }
            function changeToPreviousDropdownValue(){
            document.getElementById(previousDropdownId).value = previousColorValue;
            }
            function DropdownValidation(ID){
                var x = window.location.search;
                var y = new URLSearchParams(x);
                var rows = y.get('rows');
                var colors = y.get('colors');
                var wholeTable = document.getElementById(ID);
                var foo = wholeTable.value;
                for (var i = 1; i <= colors; i++){
                    if (i != ID) {
                        if (foo == document.getElementById(i).value){
                            document.getElementById("warn").style.display = "inline";
                            changeToPreviousDropdownValue()
                            return false;
                        }
                    }
                }
                var colorPicker = document.getElementById(ID);
                var selectedColor = colorPicker.value;
                var p = colorPicker.parentNode.nextElementSibling.querySelector('p');
                p.style.backgroundColor = selectedColor;    
                return true;
            }
        </script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            var selectedColor;
            function selectRadio(){
            selectedColor = $("input[name='color_radio']:checked").closest("td").find("select").val();
            }
            $(document).ready(function() {
                var x = window.location.search;
                var y = new URLSearchParams(x);
                var rows = y.get('rows');
                var colors = y.get('colors');
                var letter = "A";
                var table = document.getElementById("mainTable");
                var topRow = table.insertRow();
                var headerCell = topRow.insertCell();
                headerCell.classList.add("nonClickable");
                headerCell.innerHTML = "";
                for(var j = 0; j < rows; j++){
                    var cell = topRow.insertCell();
                    cell.classList.add("nonClickable");
                    cell.innerHTML = letter;
                    letter = String.fromCharCode(letter.charCodeAt(0) + 1);
                }
                letter = "A";
                for(var i = 0; i < rows; i++){
                    var row = table.insertRow();
                    var numCell = row.insertCell();
                    numCell.classList.add("nonClickable");
                    var numText = document.createTextNode(i+1);
                    numCell.appendChild(numText);
                    var letter = "A"; 
                    for (var j = 0; j < rows; j++) {
                        var cell = row.insertCell();
                        cell.innerHTML = letter + (i + 1);
                        cell.id = letter +(i + 1);
                        letter = String.fromCharCode(letter.charCodeAt(0) + 1);
                }
                    
                }
                $('#mainTable td').hover(function() {
                    if(!this.classList.contains("nonClickable")){
                        $(this).css('cursor','pointer');
                    }
                });
                $('#mainTable td').click(function(){
                    if(!this.classList.contains("nonClickable")){
                        if(selectedColor == $(this).css('background-color')){
                            $(this).css("background-color",'white');
                        }
                        else{
                        $(this).css("background-color",selectedColor);
                        }
                        var selectID = $("select").filter(function() {
                            return $(this).val() == selectedColor;
                            }).attr("id");
                        var clickedID = $(this).attr("id") + ",";
                        var colorPalette = $('#colorPalette'+selectID).text();
                        console.log("colorPalette1: " + colorPalette);

                        //Check for presence
                        for(var i = 0; i <colors; i++ ){
                            colorPalette = $('#colorPalette' + i).text();
                            if(colorPalette.indexOf(clickedID) != -1 && i != parseInt(selectID)){
                                console.log("colorPalette is: " + colorPalette);
                                var beforeText = colorPalette;
                                var updatedText = colorPalette.replace(clickedID, '');
                                console.log("expression is: " + updatedText);
                                colorPalette = $('#colorPalette'+i).text(updatedText);
                                console.log("colorPalette after is: " + colorPalette);
                            }
                        }
                        //add
                        if(colorPalette.indexOf(clickedID) == -1) {
                        $('#colorPalette'+selectID).append(clickedID);
                        }
                        
                        //sort
                        console.log("colorPalette3: " + colorPalette);
                        var IDArray = $('#colorPalette'+selectID).text().split(",");
                        console.log("IDArrary1: " + IDArray.toString());
                        IDArray.sort();
                        var holder = "";
                        for (let i = 0; i < IDArray.length; i++) {
                            if (IDArray[i] != "" || IDArray[i] != '') {
                                holder = holder.concat(IDArray[i].toString(), ",");
                            }
                            console.log("IDArrary2: " + IDArray[i].toString());
                            console.log("Holder: " + holder);
                            colorPalette = $('#colorPalette'+ selectID).text(holder);
                        }

                    }
                });

            });
        </script>
<table id ="mainTable" > </table>
<button onClick="window.print()">Print this page</button>
    </body>
    <footer>
    <hr>
    <p>&copy; Pets with Human Names, 2023</p>
    <text>Colorado State University - CS312</text>
    <hr>
</footer>    
</html>