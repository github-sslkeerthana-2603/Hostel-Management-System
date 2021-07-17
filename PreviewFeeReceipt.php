<html>
    <title>
        
    </title>
    <body>
        <form method="post" action="Registration2.php">
            <label style="margin-left: 400px; font-size: 30px;"for="trsc_id">Transaction ID:</label>
            <input id="trsc_id" style="height: 30px; width: 300px;"/><br><br>
            <br>
            <br>
            <label style="font-size: 30px; margin-left: 200px;">Fee Receipt:</label><br><br>
        <output id='fee_receipt' style="margin-left: 200px;"></output>
        <script>
            document.getElementById("fee_receipt").innerHTML=sessionStorage.getItem("e5");
            document.getElementById("trsc_id").value=sessionStorage.getItem("e4");
        </script>
        <br><br><br>
        <input type="submit" onClick="appNext();location.href='PreviewFeeReceipt.php'" style="font-size: 15px;background-color: lightblue;width: 100px; height: 50px; margin-left: 1100px; margin-bottom: 30px; " value='CONFIRM'/>
        </form>
    </body>
</html>