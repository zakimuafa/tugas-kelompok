
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>kalkulator</title>
<link rel="stylesheet" href="index.css">

</head>
<h1 style="text-align: center;">Kalkulator Terkece</h1>
<div class="container">

    <table border="1" cellspacing="0">
        <tr>
            <td colspan="4" id="inputLabel">0</td>
        </tr>
        <tr>
            <td class="khusus"colspan="3"><button onclick="pushBtn(this);">Clear</button></td>
            <td class="khusus"><button onclick="pushBtn(this);">/</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">7</button></td>
            <td><button onclick="pushBtn(this);">8</button></td>
            <td><button onclick="pushBtn(this);">9</button></td>
            <td><button onclick="pushBtn(this);">*</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">4</button></td>
            <td><button onclick="pushBtn(this);">5</button></td>
            <td><button onclick="pushBtn(this);">6</button></td>
            <td><button onclick="pushBtn(this);">-</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">1</button></td>
            <td><button onclick="pushBtn(this);">2</button></td>
            <td><button onclick="pushBtn(this);">3</button></td>
            <td><button onclick="pushBtn(this);">+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
            <td><button onclick="pushBtn(this);">.</button></td>
            <td><button onclick="pushBtn(this);">=</button></td>
        </tr>
    </table>

</div>
 
<script>
    var inputLabel = document.getElementById('inputLabel');
     
    function pushBtn(obj) {
         
        var pushed = obj.innerHTML;
         
        if (pushed == '=') {
            // Calculate
            inputLabel.innerHTML = eval(inputLabel.innerHTML);
             
        } else if (pushed == 'Clear') {
            // All Clear
            inputLabel.innerHTML = '0';
             
        } else {
            if (inputLabel.innerHTML == '0') {
                inputLabel.innerHTML = pushed;
                 
            } else {
                inputLabel.innerHTML += pushed;   
            }
        }
    }
</script>
</body>
</html>