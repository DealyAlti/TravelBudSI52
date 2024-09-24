<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBud</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Arial', sans-serif;
        }

        .hero-section {
            position: relative;
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-size: cover; 
            background-position: center; 
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #FFFFE0;
            text-align: center;
        }

        h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            letter-spacing: 2px;


        }


        .btn-start {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.5rem;
            color: #FFFFE0;
            background-color: #5F9EA0;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;

        }

        .btn-start:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="hero-section" id="hero-section">
        <div class="overlay">
            <h1>TravelBud</h1>
            <a href="pages/home.php" class="btn-start">Start</a>
        </div>
    </div>

    <script>
        const images = [
            'https://s3.bukalapak.com/uploads/content_attachment/388497bd10e8d76292e1d1c5/original/shutterstock_725803120-2.jpg',
            'https://th.bing.com/th/id/R.9a0e1f44dfd8c8f05797f474e6c5f9b6?rik=EjohaiGIv12UfQ&riu=http%3a%2f%2fawoisoak.com%2fwp-content%2fuploads%2f2017%2f09%2fdsc06446_lzn.jpg&ehk=IMJ0ogPmQ61ISbhUWKAXktCBcoxm3izT51dP4nPLDlQ%3d&risl=&pid=ImgRaw&r=0',
            'https://www.miamitour.it/wp-content/uploads/2020/09/Universal-Orlando-1.jpg',
 
        ];

        let currentIndex = 0;

        function changeBackground() {
            const heroSection = document.getElementById('hero-section');
            heroSection.style.backgroundImage = `url('${images[currentIndex]}')`;
            currentIndex = (currentIndex + 1) % images.length;
        }

        setInterval(changeBackground, 3000); 
        changeBackground(); 
    </script>
</body>
</html>
