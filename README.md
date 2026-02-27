# 💻 Sviluppo Web da Zero (PHP Nativo & Patroni di design MVC)

Questo progetto consiste nello sviluppo integrale di una piattaforma web partendo da zero, senza l'uso di CMS (WordPress) e integrando Bootstrap per il design, puntando alla massima efficienza e al controllo totale del codice.

---

## 🎯 Obiettivi
* **Ricostruzione Totale:** Ricreare il [**Sito Ufficiale**](https://cpue.it/) utilizzando codice nativo per migliorare le prestazioni.
* **Apprendimento:** Implementare il pattern **MVC**, gestire database relazionali e padroneggiare **Git/GitHub** per il lavoro collaborativo.

---

## 🔧 Stack Tecnologico
* **Linguaggi:** HTML5, CSS3 (Reset), JavaScript Vanilla, PHP Nativo.
* **Database:** MySQL / SQL.
* **UI/UX:** Bootstrap e Google Fonts.
* **Strumenti:** Git/GitHub, Figma (da definire), `.htaccess`.

---

## 📂 Struttura delle Directory (Architettura Professionale)
Il progetto separa la logica di business dai file accessibili pubblicamente per garantire sicurezza e ordine:

* **`/app`** (Logica privata - PHP)
    * `/controllers`: Gestione delle richieste.
    * `/models`: Logica dei dati e database.
    * `/views`: Template, componenti e interfaccia.
    * `/config`: Connessione al DB e costanti globali.
* **`/public`** (Radice del server - Accesso pubblico)
    * **`/assets`**: Multimedia (immagini, icone, video).
    * **`/css`**: Fogli di stile e librerie.
    * **`/js`**: Script front-end.
* **Root**
    * `.htaccess`: Gestione delle URL pulite (Friendly URLs).
    * * `index.php`: **Front Controller** (Punto di ingresso unico).
    * `README.md`: Documentazione del progetto.

---

## 📋 Tareas (Tabellone Kanban)
* **To Do:** Design in Figma, Modellazione DB, Setup delle rotte in `index.php`.
* **In Corso:** Configurazione del repository e rami `dev/gabriel` - `dev/john`.
* **Fatto:** Definizione dell'architettura e dello stack tecnico.

---

## 🛠️ Processo di Lavoro (Roadmap)
1.  **Git Flow:** Lavorare con rami personali per l'integrazione quotidiana.
2.  **Setup MVC:** Creare la struttura di cartelle e il Front Controller.
3.  **URL Clean:** Configurare il file `.htaccess`.
4.  **Design & UX:** Analizzare miglioramenti rispetto al sito originale (WordPress).
5.  **Data & Media:** Organizzare gli asset e modellare il database SQL.
6.  **Daily Sync:** Riunione rapida per assegnare compiti e fare il merge del codice.

---

## 🧠 Backlog / Idee Future
* Ottimizzazione immagini.
* Creazione di un Panel di amministrazione (CMS proprio).

---

## 📎 Risorse & Supporto
* Documentazione ufficiale PHP e MDN Web Docs.
* **W3Schools** per riferimenti rapidi.
* **IA come supporto** per ottimizzazione codice e risoluzione bug.

---

## 🗓️ Roadmap di Stato
| Fase | Attività Principale | Stato |
| :--- | :--- | :--- |
| **MVP** | Struttura funzionale e rotte PHP | 🟢 Finalizzato |
| **Fase 2** | Rifinitura UI e contenuti dinamici | 🟢 Finalizzato |
| **Fase 3** | Connessione DB e pubblicazione | 🟡 In pianificazione  |
