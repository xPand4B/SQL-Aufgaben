<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 07
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Berechnen Sie den zu zahlenden Betrag pro Leihvorgang!
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT k_vorname, k_nachname, f_titel, f_preis
                                    FROM filme, exemplare, verleihvorgang, verleih, kunden
                                    WHERE filme.f_ID = exemplare.f_ID
                                        AND exemplare.e_ID = verleihvorgang.e_ID
                                        AND verleihvorgang.v_ID = verleih.v_ID
                                        AND verleih.k_ID = kunden.k_ID
                                    ORDER BY f_preis desc';

                        $DB->getResult($query, [
                            'Vorname', 'Nachname', 'Film', 'Preis'
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