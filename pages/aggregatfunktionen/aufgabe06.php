<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 06
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Berechnen Sie die Leihvorgänge je Monat!
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT month(v_ausgabe), count(*)
                                    FROM verleih
                                    GROUP BY 1
                                    ORDER BY count(*) desc';

                        $DB->getResult($query, [
                            'Monat', 'Leihvorgänge'
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