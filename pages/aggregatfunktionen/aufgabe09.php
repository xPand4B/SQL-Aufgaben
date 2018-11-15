<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 09
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Berechnen Sie den Gesamtumsatz pro Monat im Jahr 2015!
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT year(v_ausgabe), month(v_ausgabe), sum(f_preis)
                                    FROM filme, exemplare, verleihvorgang, verleih
                                    WHERE filme.f_ID = exemplare.f_ID
                                        AND exemplare.e_ID = verleihvorgang.e_ID
                                        AND verleihvorgang.v_ID = verleih.v_ID
                                        AND year(v_ausgabe) = 2015
                                    GROUP BY 1, 2
                                    ORDER BY 3 desc';

                        $DB->getResult($query, [
                            'Jahr', 'Kategorie', 'Umsatz'
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