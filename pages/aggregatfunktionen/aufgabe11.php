<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 11
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Suchen Sie alle Kunden mit mehr als 300,-€ Umsatz. Ausgabe von Kundennummer und Nachname, absteigend sortiert nach dem Umsatz!
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT kunden.k_ID, k_nachname, sum(f_preis)
                                    FROM kunden, verleih, verleihvorgang, exemplare, filme
                                    WHERE kunden.k_ID = verleih.k_ID
                                        AND verleih.v_ID = verleihvorgang.v_ID
                                        AND verleihvorgang.e_ID = exemplare.e_ID
                                        AND exemplare.f_ID = filme.f_ID
                                    GROUP BY 2
                                    HAVING sum(f_preis) > 300
                                    ORDER BY 3 desc';

                        $DB->getResult($query, [
                            'Kunden Nr.', 'Nachname', 'Umsatz (in €)'
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