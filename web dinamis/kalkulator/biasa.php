<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator biasa</title>
</head>
<body>
    <h1>Kalkulator Biasa</h1>
    <form> <!-- bersifat GET secara default tanpaa harus method -->
        <input type="number" name="angka1">
        <select name="operator">
            <option selected disabled>Pillih operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2">
        <div style="margin-top: 10px;">
        <button type="reset">Clear</button>
        <button type="submit">Hitung</button>
        </div>
        <!-- Logika kalkulator Biasa  -->
        <?php
        if($_GET):
            $angka1 = (double) @$_GET['angka1'];
            $angka2 = (double) @$_GET['angka2'];
            $operator = @$_GET['operator'];
            // buat logika untuk penjumlahan 
            switch ($operator){
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    $hasil = $angka1 / $angka2;
                    break;
            }
        ?>
        <div style="margin-top: 10px">
            Hasil : <strong><?php echo $hasil ?></strong>
    </div>
        
        <?php
        endif; ?>
    
    </form>

</body>
</html>