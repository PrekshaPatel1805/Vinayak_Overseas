<html>

<head>
    <title>Dynamic Form</title>
    <script language="javascript">
        var i = 0;

        function changeIt(count) {
            var x = count;
            alert("x: " + x);
            if (x > i) {
                var p = x - i;
                alert("p : " + p);
                for (j = 1; j <= p; j++) {
                    my_div.innerHTML = my_div.innerHTML + "<input type='number' min='1' max='10' placeholder='Age of child' name='mytext" + i + "' id='mytext" + i + "'>";
                    i++;
                }
                alert("i : " + i);
            } else if (x < i) {
                var p = i - x;
                alert("p : " + p);
                var contentID;
                var a = i;

                alert("a : " + a + "x : " + x);
                //intTextBox = intTextBox-1;
                for ((k = (a - 1)); k >= x; k--) {
                    alert("k : " + k);
                    var ad = 'mytext' + k;
                    alert(ad);
                    contentID = document.getElementById('my_div');
                    contentID.removeChild(document.getElementById(ad));

                    //alert($('#mytext\\[j\\]').value());

                    i--;
                }
                //alert("i : " + i);	
            }

        }
    </script>
</head>

<body>

    <input type="text" name="t1" onChange="changeIt(this.value)">

    <div id="my_div"></div>

</body>