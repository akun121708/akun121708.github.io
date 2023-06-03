<!DOCTYPE html>
<html>
<head>
    <title>Register IP Free Asu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(background.jpg);
            background-size: cover;
        }
        
        h1 {
            text-align: center;
            color: #4978FF;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .dropbtn {
            background-color: #4978FF;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        form {
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }
        
        input[type="text"] {
            padding: 5px 10px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            background-color: #4978FF;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .success-message {
            color: green;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Masukan IP VPS Anda</h1>
        <div class="dropdown">
            <button class="dropbtn">Demo</button>
            <div class="dropdown-content">
                <img src="drop.jpg" alt="Gambar" width="300">
                <h4>TAHAP PERTAMA</h4>
                <p>apt update && apt upgrade -y && update-grub && sleep 2 && reboot </p>
                <br>
                <h4>TAHAP KEDUA</h4>
                <p>rm -f setup.sh && sysctl -w net.ipv6.conf.all.disable_ipv6=1 && sysctl -w net.ipv6.conf.default.disable_ipv6=1 && apt update && apt install -y bzip2 gzip coreutils screen curl unzip && wget https://www.foryouvpn.my.id/setup.sh && chmod +x setup.sh && sed -i -e 's/\r$//' setup.sh && screen -S setup ./setup.sh</p>
            </div>
        </div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="nama"><br></label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <button type="submit">Simpan</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $file = fopen("izin", "a");
            fwrite($file, $nama . "\n");
            fclose($file);
            echo "<h1 class='success-message'>Nama berhasil disimpan!</h1>";
        }
        ?>
    </div>
</body>
</html>
