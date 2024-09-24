<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000080;
            padding: 20px;
        }

        section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        section:hover {
            transform: scale(1.02);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center; 
        }

        label {
            margin-right: 10px;
            color: #555;
            width: 150px; 
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="email"],
        select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            flex: 1; 
        }

        input[type="text"]:hover,
        input[type="date"]:hover,
        input[type="number"]:hover,
        input[type="email"]:hover,
        select:hover {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        @media (max-width: 600px) {
            section {
                padding: 15px;
            }

            input[type="text"],
            input[type="date"],
            select {
                font-size: 14px;
            }

            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <section>
        <h2>Form Pemesanan</h2>
        <p style="color: green;">Penting: Paspor dengan masa berlaku minimal 6 bulan dari tanggal keberangkatan dibutuhkan untuk rute transit ke luar negeri. Jika masa berlaku paspor anda habis kurang dari 6 bulan sebelum tanggal keberangkatan, Anda tetap dapat melanjutkan pemesanan.</p>
        <p style="color: red;">Pastikan nama penumpang persis dengan yang tertulis di KTP/ Paspor / SIM yang dikeluarkan oleh pemerintah. Hindari kesalahan apa pun, karena beberapa maskapai tidak mengizinkan koreksi nama setelah pemesanan.</p>
        <br>
        <form action="confirmation.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <select id="title" name="title">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="handphone">No Handphone:</label>
                <input type="number" id="handphone" name="handphone" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Lahir:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>

            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan:</label>
                <input type="text" id="kewarganegaraan" name="kewarganegaraan" required>
            </div>

            <div class="form-group">
                <label for="paspor">No Paspor:</label>
                <input type="text" id="paspor" name="paspor" required>
            </div>

            <div class="form-group">
                <label for="tanggal_habis">Tanggal Habis Berlaku Paspor:</label>
                <input type="date" id="tanggal_habis" name="tanggal_habis" required>
            </div>

            <div class="form-group">
                <label for="paket">Pilih Paket:</label>
                <select id="paket" name="paket">
                    <option value="Japan">Osaka Holiday Package & Universal Studio Japan</option>
                    <option value="Swiss">Swiss Holiday Package & Snow in Mount Titlis</option>
                    <option value="Hongkong">Hongkong Holiday Package & Disneyland</option>
                    <option value="Jeju">Island Jeju South Korea Holiday Package</option>
                    <option value="Sydney">Sydney Holiday Package & Sydney Dinner Cruise</option>
                    <option value="Phuket">Phuket Holiday Package,Phi Phi & Khai Island</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_keberangkatan">Tanggal Keberangkatan:</label>
                <input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan" required>
            </div>

            <input type="submit" value="Pesan Sekarang">
        </form>
        <br>
        <p style="color: green;">Setelah mengisi form di atas, kami akan mengkonfirmasi pemesanan Anda melalui no handphone dan email. Pastikan untuk memeriksa no handphone dan email sudah betul Anda untuk informasi lebih lanjut.</p>
    </section>
</body>
</html>
