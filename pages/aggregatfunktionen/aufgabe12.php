<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 12
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Welcher Kunde hat im Juli 2015 am meisten Filme der Kategorie 3 ausgeliehen?
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT year(v_ausgabe), f_kategorie, k_vorname, k_nachname, count(*)
                                    FROM kunden, verleih, verleihvorgang, exemplare, filme
                                    WHERE kunden.k_ID = verleih.k_ID
                                        AND verleih.v_ID = verleihvorgang.v_ID
                                        AND verleihvorgang.e_ID = exemplare.e_ID
                                        AND exemplare.f_ID = filme.f_ID
                                        AND f_kategorie = 3
                                        AND month(v_ausgabe) = 7
                                        AND year(v_ausgabe) = 2015
                                    GROUP BY 4, 3, 2, 1
                                    ORDER BY 5 desc';

                        $DB->getResult($query, [
                            'Jahr', 'Kategorie', 'Vorname', 'Nachname', 'Verleihvorgänge'
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