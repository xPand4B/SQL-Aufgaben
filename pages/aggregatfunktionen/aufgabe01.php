<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 01
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Wie viele Leihvorgänge haben die einzelnen Kunden durchgeführt? Geben Sie den Kunden und die Anzahl aus.
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT k_vorname, k_nachname, count(*)
                                    FROM kunden, verleih
                                    WHERE kunden.k_ID = verleih.k_ID
                                    GROUP BY 2, 1
                                    ORDER BY count(*) desc';

                        $DB->getResult($query, [
                            'Vorname', 'Nachname', 'Verleihanzahl'
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