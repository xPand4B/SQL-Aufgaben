<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 15
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Gibt es einen Kunden, der am Freitag, dem 13. geboren wurde?
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = '';

                        $DB->getResult($query, [
                            'Vorname', 'Nachname', 'Geb.'
                        ]);
                    ?>
                </div>
            </div>

            <div class="card-footer pt-1 pb-1">
                <small class="text-muted">
                    <?php echo $query; ?>
                </small>
            </div>
        </div>
    </div>
</div>