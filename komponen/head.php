<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SkinPick</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <style>
    body {
  background: #FFEACA; 
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}

/* HERO SECTION */
.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(to right, #DC6D9C 70%, #291948 30%);
  padding: 120px 60px 0; 
  position: relative;
}

.hero-left {
  width: 30%;
  color: #ffffff;
}

.hero-left h1 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 20px;
  line-height: 1.3;
}

.hero-left p {
  font-size: 16px;
  margin-bottom: 25px;
  color: #ffffff;
  max-width: 90%;
}

.brand {
  font-family: 'Fredoka One', cursive;
  font-size: 32px;
  margin-bottom: 20px;
}

.btn {
  background-color: #291948;
  color: #fff;
  padding: 12px 24px;
  border-radius: 30px;
  font-weight: bold;
  text-decoration: none;
  font-size: 14px;
  display: inline-block;
}

.hero-right {
  width: 50%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* avatar Roblox */
.avatar-img {
  width: 800px;
  object-fit: contain;
  position: relative;
  z-index: 2;
  transform: translateX(-50px);
  transform: translateY(30px);
}

/* gambar dekoratif Robux */
.deco-one {
  position: absolute;
  width: 300px;
  top: -55px;
  right: -65px;
  transform: rotate(1deg);
  opacity: 0.95;
  z-index: 1;
}

/* AVATAR SECTION */
.avatar-section {
  background: #FFCFE3;   
  padding: 60px 20px 40px;
  border-radius: 0px;
  max-width: 900px;
  margin: 60px auto;
  margin-top: 120px ;
  position: relative;
}

.overlay-text {
  background: #291948;   
  color: white;
  font-size: 28px;
  font-weight: bold;
  text-align: center;
  padding: 15px 30px;
  border-radius: 0px;
  position: absolute;
  top: -62px;   
  left: 50%;
  transform: translateX(-50%);
  margin: 0;
}

.avatar-card {
  display: flex;
  align-items: center;
  background: #DC6D9C 70%;   
  padding: 20px;
  border-radius: 0px;
  margin: 20px 0;
}

.avatar-card img {
  width: 120px;
  margin-right: 20px;
}

.avatar-card .text h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 0 0 10px;
}

.avatar-card .text p {
  font-size: 14px;
  line-height: 1.5;
  margin-bottom: 10px;
}

.btn {
  display: inline-block;
  background: #291948;
  color: white;
  padding: 8px 15px;
  border-radius: 4px;
  text-decoration: none;
  font-weight: bold;
}
  </style>
</head>