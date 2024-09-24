<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #000080;
            padding: 20px;
        }

        section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 2s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        section:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        strong {
            color: #28a745;
        }

        .button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            animation: buttonPulse 1.5s infinite;
        }

        @keyframes buttonPulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .button:hover {
            background-color: #218838;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 600px) {
            section {
                padding: 20px;
            }

            p {
                font-size: 16px;
            }

            .button {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>

<section>
    <h2>Konfirmasi Pemesanan</h2>
    <p>Terima kasih, <strong><?php echo htmlspecialchars($_POST['title']); ?>. <?php echo htmlspecialchars($_POST['nama']); ?></strong>!</p>
    <p>Anda telah memesan <strong><?php echo htmlspecialchars($_POST['paket']); ?></strong> dengan tanggal keberangkatan pada <strong><?php echo htmlspecialchars($_POST['tanggal']); ?></strong>.</p>
    <p>Untuk info lebih lanjut tentang pemesanan akan dikirim melalui :  <strong><?php echo htmlspecialchars($_POST['handphone']); ?>.</p>
    <p>Kami akan menghubungi Anda untuk informasi pembayaran lebih lanjut.</p>
    <br>
    <a href="home.php" class="button">Kembali ke Halaman Utama</a>
</section>

</body>
</html>
