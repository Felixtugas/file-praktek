<?php include 'kalkulasi.php'; ?>
<html>
    <Head>
        <title>Konversi Suhu</title>
    </Head>
    <body>
        <h1>Celcius = <span><?php echo $C; ?></span></h1>
        <h1>Farenheit = <span><?php echo $F; ?></span></h1>
        <h1>Kelvin = <span><?php echo $K; ?></span></h1>
        <h1>Reamur = <span><?php echo $R; ?></span></h1>
        <hr>
        <form action="" method="get">
            <label>Celcius</label>
            <input type="number" name="Celcius" step="any">
            <input type="submit" name="dor" value="Hitung">
            <br><br>

            <label>Farenheit</label>
            <input type="number" name="Farenheit" step="any">
            <input type="submit" name="dor" value="Hitung_F">
            <br><br>

            <label>Kelvin</label>
            <input type="number" name="Kelvin" step="any">
            <input type="submit" name="dor" value="Hitung_K">
            <br><br>

            <label>Reamur</label>
            <input type="number" name="Reamur" step="any">
            <input type="submit" name="dor" value="Hitung_R">
        </form>
    </body>
</html>