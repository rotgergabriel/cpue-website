# <p align="center">🌐 CPUE: Ricostruzione Integrale</p>
<p align="center"><b>(PHP Nativo & Design Pattern MVC)</b></p>

<p align="center">
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" alt="PHP"></a>
  <a href="https://www.mysql.com/"><img src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"></a>
  <img src="https://img.shields.io/badge/sql-%2307405e.svg?style=for-the-badge&logo=postgresql&logoColor=white" alt="SQL">
  <br>
  <a href="https://developer.mozilla.org/it/docs/Web/HTML"><img src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"></a>
  <a href="https://developer.mozilla.org/it/docs/Web/CSS"><img src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3"></a>
  <a href="https://developer.mozilla.org/it/docs/Web/JavaScript"><img src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E" alt="JS"></a>
  <a href="https://getbootstrap.com/"><img src="https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"></a>
</p>

<p align="center">
  <i>Un rifacimento integrale del sito ufficiale per massime prestazioni e controllo del codice.</i>
</p>

---

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

## 🗄️ Configurazione del Database

Questo progetto utilizza un database MySQL denominato cpue_db. Di seguito sono riportati lo schema e le credenziali predefinite per lo sviluppo.

### 🛠️ Configurazione dello Schema
Per replicare la struttura del database, esegui il seguente comando SQL nel tuo gestore di database (come phpMyAdmin):

```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','editor') DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
### 🔑 Credenziali di Default (Sviluppo)
| Utente | Password | Ruolo |
| :--- | :--- | :--- |
| `torino` | `123456` | Admin |

> [!WARNING] 
> **Nota di Sicurezza:** Queste credenziali sono fornite solo per scopi di test in ambiente locale.

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
