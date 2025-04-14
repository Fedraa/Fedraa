<?php
$name = "Fedra Ghaffar";
$nim = "235150400111027";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0D3B66;
            color: #EDEDED;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            flex-direction: column;
        }
        .container {
            background: #144A74;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            text-align: center;
        }
        .bio-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            text-align: left;
            display: none;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: fill;
        }
        h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 0;
            color: #FFFFFF
        }
        h2 {
            font-size: 20px;
            font-weight: 700;
            margin-top: 0;
            color: #FFFFFF;
        }
        p {
            font-size: 16px;
            color: FFFFFF;
        }
        button {
            padding: 12px 24px;
            margin-top: 20px;
            border: none;
            background-color: #FFFFFF;
            color: #0D3B66;
            font-size: 16px;
            font-weight: 600;
            border-radius: 24px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #CA9263;
        }
		.social-links p {
			display: inline;
		}
		.social-links a {
			display: inline;
			text-decoration: none;
			color: #FFFFFF;
			font-weight: bold;
		}
    </style>
    <script>
        function showInfo() {
            document.getElementById("bio-container").style.display = "flex";
            document.getElementById("intro").style.display = "none";
        }
    </script>
</head>
<body>
    <div class="container" id="intro">
		<h1>Hello👋🏻</h1>
        <p>Wanna Know About Me?</p>
        <button onclick="showInfo()">Click Here</button>
    </div>
    <div class="container bio-container" id="bio-container">
        <img src="profile.jpg" alt="Profile Picture" class="profile-img">
        <div>
            <h1>I’m <?php echo $name; ?></h1>
            <h2>NIM: <?php echo $nim; ?></h2>
            <p>Undergraduate Information System Student at University of Brawijaya. Passionate about 
            the creative realm, with a keen eye for UI/UX Design and a love for Photography.</p>

            <div class="social-links">
				<p></p> <a href="https://www.figma.com/design/DyeBB8AqUb3wVP6SGalG32/Fedra-Ghaffar's-UI%2FUX-Design-Portfolio_February-2025?node-id=9-8204&t=CfJo43gq0zGcNT9U-1">Click here for my design portfolio</a>
			</div>
            <br>

            <b class="contact">Contact</b>

			<div class="social-links">
				<p>LinkedIn:</p> <a href="https://www.linkedin.com/in/fedraghaffar" target="_blank">Fedra Ghaffar</a>
			</div>
			<div class="social-links">
				<p>Email:</p> <a href="mailto:contactfedra@gmail.com">contactfedra@gmail.com</a>
			</div>       
        </div>
    </div>
</body>
</html>
