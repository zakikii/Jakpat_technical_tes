<!DOCTYPE html>
<html>
<head>
    <title>Les Piano</title>
    <script type="text/javascript">

        function formatDate(date) {
            const months = [
                "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];

            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear();

            
            return day + " " + month + " " + year;
        }

        function calculateDates() {
            var period = 84; //kpk dari 12, 14, dan 6 untuk mempersingkat
            var daysInYear = 365;
            var year = document.getElementById("year").value; 
            var startDate = new Date(2023, 3, 28); 

            var dates = [];
            
            for (var i = 0; i < daysInYear; i++) {
                var currentDate = new Date(startDate);
                currentDate.setDate(startDate.getDate() + (period * i)); 
                if (currentDate.getFullYear() == year) {
                    dates.push(formatDate(currentDate)); 
                }
            }

            document.getElementById("dateList").innerHTML = dates.join(", ");
        }
        
    </script>
</head>
<body>
    <p>Masukkan tahun:</p>
    <input type="text" id="year">
    <button onclick="calculateDates()">Cari Tanggal</button>
    <h4>les piano bersamaan :</h4>
    <div id="dateList"></div>
</body>
</html>
