<!DOCTYPE html>
<html>
<head>
    <title>Phone Number Input Example</title>
    <script>
        function formatPhoneNumber(event) {
            event.preventDefault();
            var phoneNumber = document.getElementById("phone").value;
            
            phoneNumber = phoneNumber.replace(/[^0-9]/g, '');
           
            if (phoneNumber.charAt(0) != '0') {
                phoneNumber = '0' + phoneNumber;
            }
            
            var formattedNumber = phoneNumber.match(/.{1,4}/g).join('-');
            document.getElementById("formattedNumber").innerHTML = formattedNumber;
        }
    </script>
</head>
<body>
    <form onsubmit="formatPhoneNumber(event)">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">
        <input type="submit" value="Submit">
    </form>
    <h2>Formatted Phone Number:</h2>
    <div id="formattedNumber"></div>
</body>
</html>
