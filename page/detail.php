<?php 
  require_once '../komponen/head.php';
  require_once '../komponen/navbar.php';
?>

<!-- CSS KHUSUS UNTUK DETAIL PAGE -->
<style>
.detail-catalog {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 40px 60px;
  background: #fff;
  width: 100%;
}

.detail-card {
  border-radius: 15px;
  text-align: center;
  padding: 20px;
  color: #000;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 200px;
}

.detail-card img {
  width: 100%;
  max-height: 120px;
  object-fit: contain;
  margin-bottom: 10px;
}

.detail-card h3 {
  font-size: 14px;
  font-weight: 600;
  margin: 8px 0 4px;
  text-align: center;
}

.price {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  font-size: 14px;
  font-weight: 500;
  margin-top: 5px;
}
</style>

<section class="herodetail">
    <div class="herodetail-text">
      <p>This avatar features a graceful gothic lolita style with a soft, mysterious touch. Dressed in a long pale blue-white gown adorned with ribbons and lace, it's paired with a large bonnet for a vintage look. Flowing hair gently covers the face, adding a quiet and enigmatic aura. A small doll in hand adds a subtle, eerie charm to the overall elegance.</p>
    </div>
    <div class="herodetail-img">
      <img src="../assets/WhatsApp_Image_2025-07-23_at_09.40.37_64e6abb8-removebg-preview 1.png" alt="Avatar" />
    </div>
</section>

<section class="detail-catalog">
    <div class="detail-card" style="background:#F28BBD;">
      <img src="../assets/3-removebg-preview 1.png" alt="Item" />
      <h3>Spring tea party hat (light blue)</h3>
      <div class="price">50 RBX</div>
    </div>
    <div class="detail-card" style="background:#F28BBD;">
      <img src="../assets/4-removebg-preview 1.png" alt="Item" />
      <h3>Mesmerised</h3>
      <div class="price">7 RBX</div>
    </div>
    <div class="detail-card" style="background:#F28BBD;">
      <img src="../assets/7-removebg-preview 1.png" alt="Item" />
      <h3>Mesmerised</h3>
      <div class="price">7 RBX</div>
    </div>
    <div class="detail-card" style="background:#FFEACA;">
      <img src="../assets/7-removebg-preview 2.png" alt="Item" />
      <h3>Killer Goth Bunny Plush (White)</h3>
      <div class="price">60 RBX</div>
    </div>
    <div class="detail-card" style="background:#FFEACA;">
      <img src="../assets/8-removebg-preview 1.png" alt="Item" />
      <h3>White Billowing Ruffle Sleeves</h3>
      <div class="price">100 RBX</div>
    </div>
    <div class="detail-card" style="background:#FFEACA;">
      <img src="../assets/9-removebg-preview 1.png" alt="Item" />
      <h3>Rococo Hip Curtain Bustles White</h3>
      <div class="price">100 RBX</div>
    </div>
    <div class="detail-card" style="background:#B899D3;">
      <img src="../assets/10-removebg-preview 1.png" alt="Item" />
      <h3>Back Bustle Draped Bow in White</h3>
      <div class="price">100 RBX</div>
    </div>
    <div class="detail-card" style="background:#B899D3;">
      <img src="../assets/11-removebg-preview 1.png" alt="Item" />
      <h3>Flowy Sleeves White</h3>
      <div class="price">55 RBX</div>
    </div>
    <div class="detail-card" style="background:#B899D3;">
      <img src="../assets/12-removebg-preview 1.png" alt="Item" />
      <h3>Sad Droopy Bunny Eyes</h3>
      <div class="price">50 RBX</div>
    </div>
    <div class="detail-card" style="background:#F9B0CE;">
      <img src="../assets/1-removebg-preview 1.png" alt="Item" />
      <h3>Lovely White Lace Bonnet</h3>
      <div class="price">100 RBX</div>
    </div>
    <div class="detail-card" style="background:#F9B0CE;">
      <img src="../assets/2-removebg-preview 1.png" alt="Item" />
      <h3>Long Wavy Bangs (White)</h3>
      <div class="price">65 RBX</div>
    </div>
</section>

<div class="purchase">
    <span><img src="../assets/rubox-removebg-preview.png" alt="robux"/> 694</span>
    <button>PURCHASE</button>
</div>

<?php require_once '../komponen/footer.php'; ?>