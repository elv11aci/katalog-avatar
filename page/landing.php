<?php 
  require_once '../komponen/head.php'; 
  require_once '../komponen/navbar.php'; 
?>

<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-left">
    <h1>LEVEL UP<br>YOUR ROBLOX STYLE</h1>
    <p>Explore thousands of unique Roblox avatar styles — sweet, elegant, and fantastical — all curated to help you stand out.</p>
    <h2 class="brand">SkinPick!</h2>
    <a href="shop.php" class="btn">EXPLORE</a>
  </div>

  <div class="hero-right">
    <!-- Avatar utama -->
    <img src="../assets/images/avatar-main.png" alt="Roblox Avatar" class="avatar-img" />
    <!-- Gambar dekoratif tambahan -->
    <img src="../assets/images/deco-icon.png" class="deco-one" alt="Robux Icon" />
  </div>
</section>

<!-- AVATAR SECTION -->
<section class="avatar-section">
  <h2 class="overlay-text">OUR NEW AVATAR!</h2>

  <!-- Avatar 1 -->
  <div class="avatar-card">
    <img src="../assets/images/avatar-1.png" alt="Blue Rococo" />
    <div class="text">
      <h3>Blue Rococo</h3>
      <p>Rococo-style Roblox avatars appear luxurious and elegant, reminiscent of European nobility of old. Their attire includes large gowns or sleek suits, featuring lace, ribbons, and pastel colors like pink, light blue, and gold. Their hair is styled gracefully for a classic look.</p>
      <a href="detail.php?avatar=rococo" class="btn">VIEW ALL</a>
    </div>
  </div>

  <!-- Avatar 2 -->
  <div class="avatar-card">
    <img src="../assets/images/avatar-2.png" alt="Igari" />
    <div class="text">
      <h3>Igari</h3>
      <p>Igari-style Roblox avatars have a cute, unique, and colorful look. Their trademark features are rosy cheeks, pigtails or buns, and kawaii accessories like pins, glasses, and pastel-colored hats. Inspired by Japanese makeup, creating a pampered and adorable look.</p>
      <a href="detail.php?avatar=igari" class="btn">VIEW ALL</a>
    </div>
  </div>

  <!-- Avatar 3 -->
  <div class="avatar-card">
    <img src="../assets/images/avatar-3.png" alt="Fantasy Digital" />
    <div class="text">
      <h3>Fantasy Digital</h3>
      <p>Fantasy Digital avatars combine fantasy and technology — wizard, knight, or elf-like attire enhanced with neon, holograms, or digital effects. Their colors are bright and vibrant, such as neon blue or purple.</p>
      <a href="detail.php?avatar=fantasy" class="btn">VIEW ALL</a>
    </div>
  </div>
</section>

<?php require_once '../komponen/footer.php'; ?>