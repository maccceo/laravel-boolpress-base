#Laravel Boolpress - a really advanced CMS

REPO: laravel-boolpress-base

Questa applicazione dovrà poter mostrare tutti i post scritti per il blog, in diverse forme, leggere un singolo post, permettere di inserirne di nuovi e di editarli

Vogliamo avere le seguenti pagine:

- **/:** La homepage del blog, farà vedere gli ultimi 5 post inseriti nel blog 
- **/category/{id}:** La pagina che fa vedere tutti i post appartenente alla categoria identificata da slug
- **/post/{id}:** La pagina che fa vedere il contenuto del post identificato da post_slug
- **/admin/post/create:** La pagina di amministrazione che permette di creare un nuovo post, questa pagina dovrà permettere di selezionare la categoria a cui un post appartiene
- **/admin/post/{id}/edit/:** La pagina di amministrazione che permette di editare nuovo post identificato da id
Per quanto riguarda i post, creare una crud completa

Qualche aiuto:
- Prima cosa da fare è disegnare il diagramma ER del database, identificando le tabelle e le loro relazioni, le colonne, i tipi e gli attributi 
- Potete evitare di fare la rotta per creare nuove categorie e aggiungere nuove righe direttamente attraverso un seed
- Un campo fondamentale per la tabella post è la colonna “content” che conterrà, appunto, il contenuto del post. Questo contenuto potrebbe essere solamente testuale, ma vogliamo fare un passo in più: vogliamo dare la possibilità a chi scrive il post di inserire tag HTML. Ad esempio, potrà utilizzare un tag `<b>` per rendere in grassetto una parte del testo. Quindi la colonna content dovrà contenere testo che dentro ha anche tag e la view dovrà trattare quel testo in modo diverso, quindi non si userà {{ }}
- Post sarà in relazione con Category (relazione uno a molti) 
