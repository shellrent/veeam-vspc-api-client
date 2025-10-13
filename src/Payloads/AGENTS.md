# Linee guida per `src/Payloads`

Le classi in questa directory rappresentano i corpi delle richieste (`POST`, `PATCH`, ecc.) descritte nello swagger VSPC.

## Convenzioni
- Implementa sempre l'interfaccia `Payload` quando disponibile e restituisci `self` dai setter per favorire la composizione fluente.
- Mantieni i nomi delle proprietà privati con la stessa capitalizzazione usata dallo swagger (es. `Name`, `ResellerUid`).
- Inizializza i valori di default solo quando documentati dalle specifiche oppure quando il comportamento della console lo richiede; in caso contrario lascia `null`.
- Documenta i setter con docblock quando il tipo accetta valori eterogenei o quando è utile linkare l'attributo corrispondente nello swagger.
- Evita logica applicativa complessa: queste classi devono limitarsi a raccogliere i dati e fornire un array serializzabile.

## Serializzazione
- Se crei nuovi payload assicurati che implementino `jsonSerialize()` oppure un metodo equivalente previsto dall'interfaccia.
- Quando un campo richiede una struttura annidata, usa array PHP standard rispettando esattamente la struttura definita nello swagger.
- Per payload JSON riutilizzabili preferisci estendere `AbstractJsonPayload` o `JsonPatchPayload`; sfrutta i factory method di `GenericPayload` solo per casi estremamente puntuali.
