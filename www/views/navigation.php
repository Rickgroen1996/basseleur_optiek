<header>
    <div class="row">
        <div class="large-3 medium-12 small-12 text-center columns">
            <img src="../www/img/logo.png">
        </div>
        <div class="large-9 medium-12 text-center columns">
        <div id='cssmenu'>
            <ul>
                <li class="<?php echo ($page == "index" ? "active" : "")?>">
                    <a href='index.php'>Home</a>
                </li>
                <li class="<?php echo ($page == "over" ? "active" : "")?>">
                    <a href='over.php'>Over</a>
                
                </li>
                <li class="has-sub <?php echo ($page == "producten" ? "active" : "")?>"><a href='producten.php'>Producten & Diensten</a>
                      <ul>
                         <li class='has-sub'><a href='#' class="sub-item">Voorbeeld 1</a></li>
                         <li class='has-sub'><a href='#' class="sub-item">Voorbeeld 2</a></li>
                  </ul>
               </li>
                <li class="<?php echo ($page == "acties" ? "active" : "")?>">
                    <a href='acties.php'>Acties & Nieuws</a>
                </li>
                <li class="<?php echo ($page == "contact" ? "active" : "")?>">
                    <a href='contact.php'>Contact</a>
                </li>
                <li class="<?php echo ($page == "afspraak" ? "active" : "")?>">
                    <a href='afspraak.php'>Online afspraak</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</header>