<p>Felic Cahyadi</p>
<h2>C14180194</h2>
<h3>Date </h3>
<input type="date" id="tanggal" name="tanggal">
<button type="button" onclick="Hitung()">Hitung</button>
<p id="hasilhitung">Hasil Perhitungan : </p>
<script>
        function Hitung() 
        {
            var tanggal = new Date (document.getElementById("tanggal").value);
            var tanggal2 = new Date();
            var result = Math.floor((tanggal - tanggal2) / (1000 * 60 * 60 * 24));
            document.getElementById("hasilhitung").innerHTML = " Hasil Perhitungan : " + result;
        }
</script>