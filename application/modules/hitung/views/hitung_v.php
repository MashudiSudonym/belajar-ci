<main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Kalkulator</h4>
                
                <form action="<?php base_url(); ?>hitung/hasil_hitung" method="post">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" name="angka1">
                    <label class="mdl-textfield__label" for="sample4">Number...</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                  </div><br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" name="angka2">
                    <label class="mdl-textfield__label" for="sample4">Number...</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                  </div>
                  <div>
                    <select name="operasi">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="/">/</option>
                        <option value="*">*</option>
                    </select>
                  </div><br>
                  <div>
                    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="hitung" value="hitung">
                  </div>
                </form><br><br>
                <?php
                    if ((isset($angka1) != '') && (isset($angka2) != '') && (isset($operasi) != '') 
                    && (isset($hasil) != '')) {
                        echo "<h4>" . $angka1 . " ". $operasi . " " . $angka2 . " = " . $hasil . "</h4>";
                    }
                ?>   

              </div>
          </section>
        </div>
      </main>