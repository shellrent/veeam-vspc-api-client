# Linee guida generali per gli agenti

Questa libreria PHP fornisce un SDK per le API della Veeam Service Provider Console (VSPC) versione 8.1. Il file OpenAPI ufficiale è disponibile in `openapi/vspc-api.json` ed è la fonte di verità per rotta, parametri e modelli di payload.

## Come pianificare una modifica
- Leggi sempre lo swagger prima di implementare nuovi metodi o payload: ogni classe del namespace `Repositories` mappa una "categoria" (tag) del file OpenAPI.
- Verifica se la funzionalità esiste già: evita duplicati e mantieni i nomi dei metodi coerenti con lo standard esistente (`get…`, `post…`, `patch…`, `delete…`).
- Se aggiungi nuove richieste ricordati di esporre un `RequestBuilder` pronto all'uso; l'esecuzione avviene tramite `VeeamSPCClient::jsonResponse()` o metodi analoghi.
- Quando tocchi più aree, valuta se servono ulteriori AGENTS.md più specifici per documentare la scelta.

## Struttura del codice
- `src/Repositories`: classi che rappresentano i vari endpoint; usano i trait `Create*Request` per costruire l'oggetto `RequestBuilder`.
- `src/Payloads`: classi fluenti che costruiscono il body delle richieste mutando lo stato interno e restituendo `self`.
- `src/Support`: componenti riutilizzabili per query string, filtri e creazione delle richieste PSR-7.

## Stile e qualità
- Il progetto segue lo stile esistente (indentazione con tab, snake case nei path, camel case nelle proprietà private). Mantieni i docblock a supporto dei setter pubblici quando servono tipi misti.
- Le nuove dipendenze devono essere aggiunte via Composer e documentate nel changelog del PR.
- Non ci sono test automatici: se introduci nuove funzionalità fornisci esempi d'uso nel messaggio del PR o nel README.

## Documentazione
- Aggiorna il README solo se aggiungi funzionalità di alto livello (nuove repository, payload importanti, uso del client).
- Se aggiungi nuove istruzioni operative, preferisci creare/aggiornare l'AGENTS.md più vicino alla modifica.
