<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <div class="card-header mb-0 pb-0">
                <h3 class="card-title mb-0 pb-0">
                    Aufgabe 14
                </h3>
            </div>
            
            <div class="card-body">
                <div class="container row">
                    Da die Lagerkosten permanent steigen möchte die Geschäftsleitung das Sortiment straffen und eine oder mehrere Kategorien aus dem Angebot nehmen.
                    Entwerfen Sie eine Abfrage, aus der hervorgeht, welche Kategorien aus dem Angebot genommen werden sollen. (geringster Umsatz pro Jahr/Monat)
                </div>
                
                <div class="my-4"></div>

                <div class="container row">
                    <?php 
                        $query = '';

                        $DB->getResult($query, [
                            'Kategorie', 'Verleihvorgänge'
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