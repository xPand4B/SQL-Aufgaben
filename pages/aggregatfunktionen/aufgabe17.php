<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 17
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Die Geschäftsleitung möchte gerne eine Umsatzstatistik haben. Überlegen Sie mit Hilfe von MYSQL und PHP eine Jahres-/Monatsstatistik.
                    <br><br>
                    a. Umsatz pro Kunde
                    <br>
                    b. Umsatz pro Film
                    <br>
                    c. Umsatz pro Kategorie
                </div>
                
                <hr class="my-4">

                <div class="container row justify-content-center">
                    
                    <form action="./Umsatzstatistik.php">
                        <div class="from-group row pb-2">
                            <?php                        
                            $DB->getDropdown('Kunde',
                                'SELECT k_ID, k_vorname, k_nachname
                                FROM kunden
                                ORDER BY k_vorname asc'
                            );?>
                        </div>
                        <div class="from-group row pb-2">
                        <?php                        
                            $DB->getDropdown('Filme',
                                'SELECT f_ID, f_titel
                                FROM filme
                                ORDER BY f_titel asc'
                            );?>
                        </div>
                        <div class="from-group row pb-4">
                        <?php                        
                            $DB->getDropdown('Kategorie',
                                'SELECT DISTINCT f_kategorie, f_kategorie
                                FROM filme
                                ORDER BY f_kategorie asc'
                            );?>
                        </div>

                        <div class="form-group row text-center">
                            <button type="submit" name="submit" class="btn btn-block btn-success">
                                Submit
                            </button>
                        </div>
                        
                        <div class="form-group row text-center">
                            <a class="btn btn-block btn-info" style="color: white;" onclick="DropdownReset('js-dropdown')">
                                Reset
                            </a>
                        </div>
                    </form>
                </div>

                <hr class="my-4">
                
                <script>
                    DropdownListener('js-dropdown');
                </script>

            </div>

            <div class="card-footer pt-1 pb-1">
                <small class="text-muted">
                    <?php echo $query; ?>
                </small>
            </div>
        </div>
    </div>
</div>