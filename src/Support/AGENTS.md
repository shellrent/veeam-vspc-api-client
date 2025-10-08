# Linee guida per `src/Support`

Queste classi e trait forniscono l'infrastruttura comune (builder HTTP, filtri, helper per le richieste).

- Mantieni il codice minimale: niente dipendenze applicative dalle repository o dai payload.
- I trait `Create*Request` devono restare privi di logica extra; si limitano a costruire il path a partire da `getBaseRoute()` e dal segmento passato.
- `RequestBuilder` è responsabile della composizione dell'oggetto PSR-7: se servono nuove feature (ad es. header custom, body JSON) aggiungi metodi dedicati che rispettino l'approccio fluent usato da `query()` e `filter()`.
- I filtri (`Filter`, `FilterCollection`, `FilterConnection`) devono serializzarsi secondo il formato JSON previsto dall'API. Aggiorna i docblock quando introduci nuove operazioni o parametri.
- Quando modifichi URL o query builder, verifica sempre l'impatto sulle repository esistenti.
