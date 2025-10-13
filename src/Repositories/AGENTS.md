# Linee guida per `src/Repositories`

Ogni classe in questa cartella rappresenta il client per una categoria di endpoint delle API VSPC.

## Convenzioni
- Il nome della classe deve corrispondere al tag definito nello swagger (es. `PulseRepository`, `CompanyRepository`).
- Implementa sempre l'interfaccia `Repository` e definisci `getBaseRoute()` con la radice esatta dello specifico endpoint.
- Usa i trait `CreateGetRequest`, `CreatePostRequest`, `CreatePatchRequest`, `CreateDeleteRequest` invece di istanziare manualmente `RequestBuilder`.
- Ogni metodo deve restituire un `RequestBuilder`. L'esecuzione della richiesta resta responsabilità di `VeeamSPCClient` o del chiamante.
- Quando una rotta richiede path parameters, usa `sprintf()` e mantieni l'ordine esatto come documentato nello swagger.
- Per query string opzionali usa `$request->query([...])`. Mantieni i nomi dei parametri identici a quelli del file OpenAPI (rispettando maiuscole/minuscole).
- Conserva i nomi dei metodi con il prefisso HTTP (es. `getAll`, `postCreate`, `patchModify…`, `delete…`) per facilitare la ricerca.

## Note pratiche
- Se l'endpoint permette filtri o paginazione, documenta l'uso nelle docblock del metodo e, quando necessario, valorizza parametri default coerenti con l'API.
- In caso di breaking change tra versioni dell'API, valuta se introdurre un nuovo metodo lasciando il precedente deprecato per retrocompatibilità.
- Ricontrolla sempre `openapi/vspc-api.json` per confermare request body, required fields e possibili valori enumerati.
