<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Signature SCCGroup GitHub Revert Done</title>
  <link rel="icon" type="image/x-icon" href="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-scc-blue-2-1.png" class="header-img">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Tahoma;
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 260px;
      background-color: #004080;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    .sidebar-title {
      font-size: 17px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .menu-title {
      font-size: 16px;
      font-weight: bold;
      margin: 10px 0 5px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between; 
    }

    .submenu {
      display: none;
      flex-direction: column;
      margin-bottom: 10px;
    }

    .submenu button {
      background: none;
      border: none;
      color: white;
      text-align: left;
      padding: 8px 15px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
      transition: background 0.3s;
    }

    .submenu button:hover,
    .submenu button.active {
      background-color: #0066cc;
    }

    .content {
      flex: 1;
      padding: 40px;
      background-color: #f4f6f8;
      overflow-y: auto;
    }

    .signature-block {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 700px;
      display: none;
    }

    .signature-block.show {
      display: block;
    }

    .signature-block p {
      margin: 5px 0;
    }

    .copy-btn {
      margin-top: 15px;
      padding: 8px 16px;
      background-color: #004080;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .copy-btn:hover {
      background-color: #0066cc;
    }

    a {
      color: #004080;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .dropdown-icon {
      font-size: 12px;
      transition: transform 0.3s ease;
    }

    .menu-title.active .dropdown-icon {
      transform: rotate(180deg);
    }
  </style>
</head>
<body>

<div class="sidebar">
  <div class="sidebar-title">Signature SCCGROUP UPDATE</div>
    <div class="menu-title" onclick="toggleMenu('menu1', this)">
      SCCBakery 
      <i class="fa fa-chevron-down dropdown-icon"></i> 
    </div>
  <div id="menu1" class="submenu">
    <button onclick="showSignature('jakarta-01', this)">Jakarta</button>
    <button onclick="showSignature('bandung-01', this)">Bandung</button>
    <button onclick="showSignature('surabaya-01', this)">Surabaya</button>
    <!--<button onclick="showSignature ('jakarta-sac', this)">Jakarta-sac</button>-->
  </div>

  <div class="menu-title" onclick="toggleMenu('menu2', this)">
      Bakeware & co
      <i class="fa fa-chevron-down dropdown-icon"></i> 
    </div>
  <div id="menu2" class="submenu">
    <button onclick="showSignature('jakarta-02', this)">Jakarta</button>
    <button onclick="showSignature('regional-jakarta-02', this)">Regional Jakarta</button>
    <!-- <button onclick="showSignature('surabaya', this)">Surabaya</button> -->
  </div>
  
   <div class="menu-title" onclick="toggleMenu('menu3', this)">
      SAC
      <i class="fa fa-chevron-down dropdown-icon"></i> 
    </div>
  <div id="menu3" class="submenu">
    <button onclick="showSignature('jakarta-03', this)">Jakarta</button>
    <!-- <button onclick="showSignature('regional-jakarta', this)">Regional Jakarta</button> -->
    <!-- <button onclick="showSignature('surabaya', this)">Surabaya</button> -->
  </div>
  
 
  <div class="menu-title" onclick="toggleMenu('menu4', this)">
       Broadcast Gmail 
      <!-- <a href="https://www.instagram.com/sccbakery.id/" target="_blank" style="color: #004080;">Download PDF</a> -->
      <i class="fa fa-chevron-down dropdown-icon"></i> 
  </div>
  <div id="menu4" class="submenu">
    <button onclick="showSignature('pdf-04', this)">Download PDF</button>
    <!-- <button onclick="showSignature('pdf', this)">Download Word</button> -->
  </div>
</div>

<div class="content">
    <div id="jakarta-03" class="signature-block show">
      <!-- <p><strong>Kantor Jakarta</strong></p> -->
      <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
      <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>
      <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>
      <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>
      <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>
      <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/05/sac-logo.png" 
      style="height:80px; width:185px; padding-top:5px; padding-bottom:5px;"
      height="80px" width="185px" padding-top="5px" padding-bottom="5px" alt="Logo SCC" />
      <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>PT Sinar Anugrah Cemerlang </strong><br/>
        Grha Popolia, Jl. Gunung Sahari II No.7<br/>
        Gn. Sahari Sel, Kec. Kemayoran, Jakarta Pusat 10610<br/>
        Tel. +62 (21) 4205 344 | Mobile. ------------<br/>
        <span style="display: inline-block; margin-top: 0px;">
          <a href="http://www.sccbakery.com" target="_blank" style="color: #004080;">www.sccbakery.com</a>
          <span style="color: #004080;"> | </span>
          <!-- <a href="https://www.instagram.com/bakewareco/" target="_blank" style="color: #004080;">IG. @bakewareco</a> -->
          <a href="https://www.instagram.com/sccbakery.id/" target="_blank" style="color: #004080;">IG. @sccbakery.id</a>
        </span>
      </p>
      <button class="copy-btn" onclick="">Copy Signature</button>
    </div>
    
    <div id="jakarta-01" class="signature-block show">
      <!-- <p><strong>Kantor Jakarta</strong></p> -->
      <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
      <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>
      <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>
      <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>
      <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>
      <!--<img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-scc-blue-2-1.png" style="height:70px; width:185px; margin:8px 0;" alt="Logo SCC" />-->
       <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-scc-blue-2-1.png" 
       style="height:80px; width:185px; padding-top:5px; padding-bottom:5px" 
       height="80" width="185" padding-top="5" padding-bottom="5" alt="Logo SCC" />
      <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>PT SINAR CAHAYA CEMERLANG</strong><br/>
        Grha Popolia, Jl. Gunung Sahari II No.7<br/>
        Gn. Sahari Sel, Kec. Kemayoran, Jakarta Pusat 10610<br/>
        Tel. +62 (21) 4205 344 | Mobile. ------------<br/>
        <span style="display: inline-block; margin-top: 0px;">
          <a href="http://www.sccbakery.com" target="_blank" style="color: #004080;">www.sccbakery.com</a>
          <span style="color: #004080;"> | </span>
          <!-- <a href="https://www.instagram.com/bakewareco/" target="_blank" style="color: #004080;">IG. @bakewareco</a> -->
          <a href="https://www.instagram.com/sccbakery.id/" target="_blank" style="color: #004080;">IG. @sccbakery.id</a>
        </span>
      </p>
      <button class="copy-btn" onclick="">Copy Signature</button>
    </div>

  <div id="bandung-01" class="signature-block show">
    <!-- <p><strong>Kantor Jakarta</strong></p> -->
    <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
    <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>
    <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>
    <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>
    <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>
    <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-scc-blue-2-1.png" 
     style="height:80px; width:185px; padding-top:5px; padding-bottom:5px" 
       height="80" width="185" padding-top="5" padding-bottom="5" alt="Logo SCC" />
    <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>PT SINAR CAHAYA CEMERLANG</strong><br/>
      Jl. Tugu Kencana, Ruko Tugu Mas Kencana Blok I-J<br/>
      Suka Asih, Kec. Bojongloa Kaler, Bandung 40231<br/>
      Tel. +62 (22) 612 5112 | Mobile. ------------<br/>
      <span style="display: inline-block; margin-top: 0px;">
        <a href="http://www.sccbakery.com" target="_blank" style="color: #004080;">www.sccbakery.com</a>
        <span style="color: #004080;"> | </span>
        <a href="https://www.instagram.com/sccbakery.id/" target="_blank" style="color: #004080;">IG. @sccbakery.id</a>
      </span>
    </p>
    <button class="copy-btn" onclick="">Copy Signature</button>
  </div>

  <div id="surabaya-01" class="signature-block show">
    <!-- <p><strong>Kantor Jakarta</strong></p> -->
    <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
    <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>
    <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>
    <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>
    <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>
    <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-scc-blue-2-1.png" 
    style="height:80px; width:185px; padding-top:5px; padding-bottom:5px" 
    height="80" width="185" padding-top="5" padding-bottom="5" alt="Logo SCC" />
    <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>PT SINAR CAHAYA CEMERLANG</strong><br/>
      Jl. Ngagel Jaya Selatan, Komplek Ruko RMI Blok H/16<br/>
      Surabaya, Jawa Timur 60284<br/>
      Tel. +62 (31) 505 6011 | Mobile. ------------<br/>
      <span style="display: inline-block; margin-top: 0px;">
        <a href="http://www.sccbakery.com" target="_blank" style="color: #004080;">www.sccbakery.com</a>
        <span style="color: #004080;"> | </span>
        <a href="https://www.instagram.com/sccbakery.id/" target="_blank" style="color: #004080;">IG. @sccbakery.id</a>
      </span>
    </p>
    <button class="copy-btn" onclick="">Copy Signature</button>
  </div>
  
  <!--<div id="jakarta-02" class="signature-block show">-->
    <!-- <p><strong>Kantor Jakarta</strong></p> -->
    <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
  <!--  <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>-->
  <!--  <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>-->
  <!--  <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>-->
  <!--  <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>-->
  <!--  <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-bakeware-cpanel.png" -->
  <!--  style="height:30px; width:200px; margin-bottom:15px;" -->
  <!--  height="30" width="200" margin-bottom="15" alt="Logo SCC" />-->
  <!--  <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;" margin-bottom="15"></p>-->
  <!--  <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>CV MPOPOLIA</strong><br/>-->
  <!--    Grha Popolia, Jl. Gunung Sahari II No.7<br/>-->
  <!--    Gn. Sahari Sel, Kec. Kemayoran, Jakarta Pusat 10610<br/>-->
  <!--    Tel. +62 (21) 4205 344 | Mobile. ------------<br/>-->
  <!--    <span style="display: inline-block; margin-top: 0px;">-->
  <!--      <a href="http://www.bakewareco.id" target="_blank" style="color: #004080;">www.bakewareco.id</a>-->
  <!--      <span style="color: #004080;"> | </span>-->
  <!--      <a href="https://www.instagram.com/bakewareco/" target="_blank" style="color: #004080;">IG. @bakewareco</a>-->
  <!--    </span>-->
  <!--  </p>-->
  <!--  <button class="copy-btn" onclick="">Copy Signature</button>-->
  <!--</div>-->
  
  
 <div id="jakarta-02" class="signature-block show">
     <!--<p><strong>Kantor Jakarta</strong></p> -->
     <!--<p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
    <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>
    <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>
    <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>
    <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>
    <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-bakeware-cpanel.png" 
    style="height:30px; width:200px; margin-top:8px; margin-bottom:8px;" 
    height="30" width="200" margin-top="8" margin-bottom="8" alt="Logo SCC" />
    <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>CV MPOPOLIA</strong><br/>
      Grha Popolia, Jl. Gunung Sahari II No.7<br/>
      Gn. Sahari Sel, Kec. Kemayoran, Jakarta Pusat 10610<br/>
      Tel. +62 (21) 4205 344 | Mobile. ------------<br/>
      <span style="display: inline-block; margin-top: 0px;">
        <a href="http://www.bakewareco.id" target="_blank" style="color: #004080;">www.bakewareco.id</a>
        <span style="color: #004080;"> | </span>
        <a href="https://www.instagram.com/bakewareco/" target="_blank" style="color: #004080;">IG. @bakewareco</a>
      </span>
    </p>
    <button class="copy-btn" onclick="">Copy Signature</button>
  </div>

  <div id="regional-jakarta-02" class="signature-block show">
    <!-- <p><strong>Kantor Jakarta</strong></p> -->
    <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
    <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p>
    <p style="font-size: 12px; font-weight: bold; margin-bottom : 15px;">Best Regards,</p>
    <p style="font-size: 14px; font-weight: bold; line-height : 17px; margin-bottom : 15px;"><strong>----NAME----</strong><br/>
    <span style="font-size: 12px; font-weight: bold; color: #808080;">----Position----</span></p>
    <img src="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/logo-bakeware-cpanel.png" 
    style="height:30px; width:200px; margin-top:8px; margin-bottom:8px";
    height="30" width="200" margin-top="8" margin-bottom="8" alt="Logo SCC" />
    <p style="font-size: 11px; color: #000; line-height: 15px; margin-top: 15px;"><strong>CV MPOPOLIA</strong><br/>
      Jl. Bungur Besar Raya No.85 Blok B-1<br/>
      Kemayoran, Kec Kemayoran, Jakarta Pusat 10610<br/>
      Tel. +62 (21) 2962 4809 | Mobile. ------------<br/>
      <span style="display: inline-block; margin-top: 0px;">
        <a href="http://www.bakewareco.id" target="_blank" style="color: #004080;">www.bakewareco.id</a>
        <span style="color: #004080;"> | </span>
        <a href="https://www.instagram.com/bakewareco/" target="_blank" style="color: #004080;">IG. @bakewareco</a>
      </span>
    </p>
    <button class="copy-btn" onclick="">Copy Signature</button>
  </div>
  
  <div id="pdf=04" class="signature-block show">
    <!-- <p><strong>Kantor Jakarta</strong></p> -->
    <!-- <p style="font-size: 12px; font-weight: bold; text-align: justify; margin-bottom : 30px;">Per tanggal 01 Mei 2025, seluruh komunikasi akan menggunakan alamat email terbaru, mohon bantuannya untuk mengupdate kontak masing-masing.</p> -->
    <p style="font-size: 12px; text-align: justify; margin-bottom : 30px;">Yth. Bapak/Ibu {Customer/Vendor} <br/> <br/>
    Dengan ini penggunaan email <b>{email@gmail.com}</b> akan dinon-aktifkan per tanggal 01 Mei 2025. Seluruh korespondensi terkait pemesanan, penawaran, invoice, dan komunikasi lainnya akan meggunakaan alamat email yang baru <b>{email@sccbakery.com}</b>.
    Terima kasih atas perhatian dan kerjasamanya.
    </p>
    <a href="https://bakewareco.wordpress.com/wp-content/uploads/2025/04/broadcast-gmail-sccgroup-.pdf"><button class="copy-btn">Cek & download file disini</button></a>
    
  </div>
</div>

<script>
  function toggleMenu(id, btn) {
    const menu = document.getElementById(id);
    menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
    btn.classList.toggle('active');
  }

  function showSignature(id, btn) {
    document.querySelectorAll('.signature-block').forEach(el => el.classList.remove('show'));
    document.getElementById(id).classList.add('show');

    document.querySelectorAll('.submenu button').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }

  function copySignature(button) {
    const block = button.closest('.signature-block');
    const tempTextArea = document.createElement('textarea');
    tempTextArea.value = block.innerText;
    document.body.appendChild(tempTextArea);
    tempTextArea.select();
    document.execCommand('copy');
    document.body.removeChild(tempTextArea);
    button.innerText = 'Copied!';
    setTimeout(() => {
      button.innerText = 'Copy Signature';
    }, 2000);
  }
</script>

</body>
</html>
