 <div class="col-sm-4">
      <div id="google_translate_element"></div>
      <script type="text/javascript">
      function googleTranslateElementInit() {
         new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
      }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <div>
        <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
        <!-- Histats.com  START  (aync)-->
        <script type="text/javascript">var _Hasync= _Hasync|| [];
        _Hasync.push(['Histats.start', '1,4716707,4,24,200,50,00011000']);
        _Hasync.push(['Histats.fasi', '1']);
        _Hasync.push(['Histats.track_hits', '']);
        (function() {
        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
        })();</script>
        <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4716707&101" alt="" border="0"></a></noscript>
        <!-- Histats.com  END  -->
      </div>
      <div class="card mb-3">
        <div class="card-header" style="background-color: #BF0BDF; color: white;">
        <img src="https://www.thahirudin.com/asset/img/writer2.png">
          Penulis
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-4"><img src="asset/img/DSC_0006.jpg" width="100%" class="img-thumbnail"></div>
            <div class="col">
              <h5 class="card-title">Thahirudin</h5>
              <p class="card-text" >Saya adalah Thahirudin. Saya adalah Mahasiswa dari Universitas terfavorit di Provinsi Riau yaitu Universitas Muhammadiyah Riau.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-header" style="background-color: #BF0BDF; color: white;">
        <img src="https://www.thahirudin.com/asset/img/app.png">
          Kategori
        </div>
        <div class="card-body">
          <?php while( $row2 = mysqli_fetch_assoc($b)) :?>
          <a href="label.php?idkategori=<?php echo $row2 ["idkategori"]?>"><button type="submit" class="btn" style="background-color: #BF0BDF; color: white; margin: 10px;"><?php echo $row2 ["nama"]?></button></a>
          <?php $i++ ;?>
          <?php endwhile;?>
        </div>
      </div>
    </div>