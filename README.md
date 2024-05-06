PHP - OOP 2
===

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi , cucce , etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia)

=== 
**Svolgimento**
- Definisco una classe "Product" generica con 5 proprietà, incluso uno sconto fisso del 20% che si applica a ogni prodotto scontato (valore 1)
- Aggiunta la classe "Race" per distinguere i prodotti per gatto e cane
- Creazione di un database in cui inserire istanze di ogni singolo prodotto, per poi stamparle in pagina con la possibilità di dividerli per razza