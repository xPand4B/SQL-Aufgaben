<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 03
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Wie lautet der Film mit dem maximalen Preis?
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = 'SELECT f_titel, f_preis
                                    FROM filme
                                    WHERE f_preis = (
                                        SELECT MAX(f_preis)
                                        FROM filme
                                    )';

                        $DB->getResult($query, [
                            'Filmtitel', 'Preis (in €)'
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