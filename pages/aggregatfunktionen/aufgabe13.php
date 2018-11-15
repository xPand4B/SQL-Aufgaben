<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 13
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Liste alle Kunden auf, die überdurchschnittlich viele Horrorfilme (Kat. 8) ausgeliehen haben!
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT k_vorname, k_nachname, f_kategorie, count(*)
                                    FROM kunden, verleih, verleihvorgang, exemplare, filme
                                    WHERE kunden.k_ID = verleih.k_ID
                                        AND verleih.v_ID = verleihvorgang.v_ID
                                        AND verleihvorgang.e_ID = exemplare.e_ID
                                        AND exemplare.f_ID = filme.f_ID
                                        AND f_kategorie = 8
                                    GROUP BY 1, 2, 3
                                    ORDER BY 4 desc';

                        $DB->getResult($query, [
                            'Vorname', 'Nachname', 'Kategorie', 'Verleihvorgänge'
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