<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 04
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Berechnen Sie die Anzahl der Leihvorgänge je Film.
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT f_titel, count(*)
                                    FROM filme, exemplare, verleihvorgang
                                    WHERE filme.f_ID = exemplare.f_ID
                                        AND exemplare.e_ID = verleihvorgang.e_ID
                                    GROUP BY 1
                                    ORDER BY count(*) desc';

                        $DB->getResult($query, [
                            'Filmtitel', 'Leihvorgänge'
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